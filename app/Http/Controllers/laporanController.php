<?php

namespace App\Http\Controllers;
use App\Models\Reservasi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function index(){
        $laporan = Reservasi::all();
        return view ('laporan', compact('laporan'));
    }

    public function cetak_laporan(Request $request){
        $jenis = $request->jenis;
        $tanggal_awal = $request->dari;
        $tanggal_akhir = $request->sampai;

        if($jenis == 'semua'){
            $reservasi = Reservasi::whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->get();
        }else{
            $reservasi = Reservasi::where('jenis_pembayaran', $jenis)->whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->get();
        }

        $pdf = Pdf::loadview('laporan_pdf',['reservasi' => $reservasi]);
        return $pdf->download('laporan.pdf');

    }
}
