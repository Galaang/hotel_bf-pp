<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function dashboard(){

        $countReservasi = DB::table('reservasis')->count();
        $countKamar = DB::table('kamars')->count();
        $countPendapatan = DB::table('reservasis')
        ->where('status', 'Sudah Bayar')
        ->whereMonth('created_at', Carbon::now()->format('m'))
        ->sum('harga_sewa');
        return view('dashboard.index', compact('countReservasi','countKamar', 'countPendapatan'));

    }

    function index(){
        return view('index');
    }

    public function booking($id = null){
        return view ('booking', compact('id'));
    }
}
