<?php

namespace App\Http\Controllers;

use App\Models\RegistrasiRoom;
use App\Models\Rooms;
use Illuminate\Http\Request;

class registerRoomController extends Controller
{
    public function index(){
        $room = Rooms::orderBy('tipe_kamar','asc')->orderBy('harga')->get();
        return view ('registerRoom', compact(['room']));
    }

    public function tambah_kamar(){
        return view ('tambahkamar');
    }

    public function store(Request $request){
        $data = new Rooms();

        $data->kamar = $request->kamar;
        $data->harga = $request->harga;
        $data->tipe_kamar = $request->tipe_kamar;
        if($request->tipe_kamar == 'Deluxe'){
            $kode = 'DX-'.date('dmy');
        }elseif($request->tipe_kamar == 'Suite'){
            $kode = 'SU-'.date('dmy');
        }elseif($request->tipe_kamar == 'Standard'){
            $kode = 'ST-'.date('dmy');
        }elseif($request->tipe_kamar == 'Family'){
            $kode = 'FM-'.date('dmy');
        }
        $data->kode_kamar = $kode;
        $data->fasilitas = $request->fasilitas;
        $data->jumlah_kasur = $request->jumlah_kasur;


        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarKamar/',$request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
        }
        $data->save();
        return redirect('/registerRoom');
    }

    public function edit_kamar($id){

        $room = Rooms::find($id);
        return view('editkamar', compact('room'));
    }

    public function update_kamar($id, Request $request){
        $room = Rooms::find($id);
        $room ->update($request->except(['_token','submit']));
        return redirect('/registerRoom');
    }

    public function destroy_kamar($id){
        $room = Rooms::find($id);
        $room ->delete();
        return redirect('/registerRoom');
    }
}
