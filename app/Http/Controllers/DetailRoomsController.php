<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class DetailRoomsController extends Controller
{
    public function detailrooms($id = null){
        $detail = Rooms::find($id);
        return view ('details', compact('id', 'detail'));
    }
}
