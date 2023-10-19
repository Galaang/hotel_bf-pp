<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Reservasi;
use App\Models\Rooms;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomsController extends Controller
{
    public function index(){
        $rooms = Rooms::get();
        return view ('rooms', compact('rooms'));
    }

    public function store(Request $request)
    {
        $booking = Carbon::parse($request->tanggal_booking)->format('Y-m-d');
        $cekout = Carbon::parse($request->tanggal_cekout)->format('Y-m-d');

        if($booking > $cekout || $booking == $cekout){
            return redirect()->back()->withErrors('Tanggal Booking tidak boleh lebih besar atau sama dengan dari tanggal cekout')->withInput();
        }elseif($booking < Carbon::now()->format('Y-m-d') || $cekout < Carbon::now()->format('Y-m-d')){
            return redirect()->back()->withErrors('Tanggal Booking atau Tanggal Cekout tidak boleh lebih kecil dari hari ini')->withInput();
        }

        $kamar = Rooms::find($request->id);

        $resevasi = new Reservasi();
        $resevasi->user_id = Auth::user()->id;
        $resevasi->kamar_id = $kamar->id;
        $resevasi->nama = $request->nama;
        $resevasi->no_identitas = $request->no_identitas;
        $resevasi->alamat = $request->alamat;
        $resevasi->nohp = $request->nohp;
        $resevasi->tipe_kamar = $kamar->tipe_kamar;
        $resevasi->tanggal_booking = $booking;
        $resevasi->tanggal_cekout = $cekout;
        $lama_sewa = date_diff(date_create($request->tanggal_booking), date_create($request->tanggal_cekout));
        $resevasi->waktu_booking = $request->waktu_booking;
        $resevasi->harga_sewa = $kamar->harga * $lama_sewa->days;
        $resevasi->jenis_pembayaran = $request->jenis_pembayaran;
        $resevasi->status = 'Belum Bayar';
        $resevasi->save();

        return redirect('/booking-list');
    }

    public function booking_list(){
        if(Auth::check() == false){
            return redirect('/login');
        }
        $reservasi = Reservasi::join('kamars', 'reservasis.kamar_id','=','kamars.id')->where('reservasis.user_id', Auth::user()->id)->select('reservasis.*','kamars.kode_kamar','kamars.tipe_kamar','kamars.jumlah_kasur','kamars.fasilitas','kamars.harga')->get();
        return view('booking-list', compact('reservasi'));
    }

    public function extends_hari(Request $request, $id){
        $booking = Carbon::parse($request->tanggal_booking)->format('Y-m-d');
        $cekout = Carbon::parse($request->tanggal_cekout)->format('Y-m-d');

        $reservasi = Reservasi::find($id);
        $lama_sewa = date_diff(date_create($reservasi->tanggal_booking), date_create($reservasi->tanggal_cekout));
        $reservasi->harga_sewa = $reservasi->kamar->harga * $lama_sewa->days;
        $reservasi->tanggal_booking = $booking;
        $reservasi->tanggal_cekout = $cekout;
        $reservasi->save();

        return redirect('/booking-list');
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::where('reservasi_id', $id)->first();
        if($pembayaran != null){
            unlink(public_path('bukti_pembayaran/'.$pembayaran->bukti));

        $pembayaran->delete();
        }

        $reservasi = Reservasi::find($id);
        $reservasi->delete();
        return redirect('/booking-list');
    }

    public function bayar(Request $request, $id){
        $pemabayran = new Pembayaran();
        $pemabayran->reservasi_id = $id;
        $pemabayran->kode_pembayaran = Carbon::now()->format('mdHis');
        $nama_file = $pemabayran->kode_pembayaran . '.' . $request->file('bukti_pembayaran')->getClientOriginalExtension();
        $request->file('bukti_pembayaran')->move(public_path('bukti_pembayaran'), $nama_file);
        $pemabayran->bukti = $nama_file;
        $pemabayran->save();

        $reservasi = Reservasi::find($id);
        $reservasi->status = 'Menunggu Konfirmasi';
        $reservasi->save();

        return redirect('/booking-list');
    }

    public function konfirmasi($id){

        $reservasi = Reservasi::find($id);
        $reservasi->status = 'Sudah Bayar';
        $reservasi->save();

        return redirect('/table-reservasi');
    }
}
