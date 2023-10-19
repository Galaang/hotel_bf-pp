<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Reservasi;

class reservasiController extends Controller
{

    public function index()
    {
        $reservasi = Reservasi::all();
        return view('index', compact('reservasi'));
    }

    public function table_reservasi(){
        $reservasi = Reservasi::join('pembayarans', 'pembayarans.reservasi_id', 'reservasis.id')->select('reservasis.*','pembayarans.kode_pembayaran','pembayarans.bukti')->get();
        return view('table-reservasi',compact('reservasi'));
    }

    public function create()
    {
        return view('reservasi');
    }

    public function store(Request $request)
    {

        Reservasi::create($request->except(['_token','submit']));
        return redirect('/table-reservasi');

        // $reservasi = new Reservasi;
        // $reservasi->nama = $request->input('nama');
        // $reservasi->no_identitas = $request->input('no_identitas');
        // $reservasi->alamat = $request->input('alamat');
        // $reservasi->no_hp = $request->input('nohp');
        // $reservasi->tipe_kamar = $request->input('tipe_kamar');
        // $reservasi->tanggal_booking = $request->input('tanggal_booking');
        // $reservasi->waktu_booking = $request->input('waktu_booking');
        // $reservasi->harga_sewa = $request->input('harga_sewa');
        // $reservasi->tanggal_cekout = $request->input('tanggal_cekout');
        // $reservasi->save();
        // return redirect()->route('reservasi')->with('success', 'Reservasi berhasil ditambahkan');
    }
}


