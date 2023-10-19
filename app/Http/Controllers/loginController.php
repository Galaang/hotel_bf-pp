<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request){

        $data = [
            'name' => $request->input('name'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($data)){
            return redirect('/');
        }
        else{
            return redirect('/');
        }

    }

    function register(){
        return view('register');
    }

    public function store(Request $request)
    {
        Session::flash('name', $request->input('name'));
        Session::flash('email', $request->input('email'));
        Session::flash('password',$request->input('password'));
        Session::flash('no_id', $request->input('no_id'));
        Session::flash('telepon',$request->input('telepon'));
        Session::flash('Tanggal_Lahir', $request->input('Tanggal_Lahir'));
        Session::flash('Jenis_Kelamin',$request->input('Jenis_Kelamin'));

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'no_id' => 'required',
            'telepon' => 'required',
            'Tanggal_Lahir' => 'required',
            'Jenis_Kelamin' => 'required'
        ],[
            'name.required' => 'Nama Wajib Diisi!',
            'email.required' => 'email Wajib Diisi!',
            'email.email' => 'email yang dimasukkan tidak valid!',
            'email.unique' => 'email sudah digunakan!',
            'password.required' => 'password wajib di isi',
            'no_id.required' => 'No.Identitas wajib di isi',
            'telpon.required' => 'Telpon wajib di isi',
            'Tanggal_Lahir.required' => 'Tanggal Lahir wajib di isi',
            'Jenis_Kelamin.required' => 'Jenis Kelamin wajib di isi'
        ]);

        $data = [
            'name' => $request->name,
            'email'      => $request->email,
            'password'  => Hash::make($request->password),
            'no_id'     => $request->no_id,
             'telepon'     => $request->telepon,
              'Tanggal_Lahir'     => $request->Tanggal_Lahir,
               'Jenis_Kelamin'     => $request->Jenis_Kelamin,

        ];
        User::create($data);


        // $data = User::create([
        //     'name'      => $name,
        //     'email'      => $email,
        //     'password'      => $password,
        //     'no_id'     => $no_id,
        //      'telepon'     => $telepon,
        //       'Tanggal_Lahir'     => $Tanggal_Lahir,
        //        'Jenis_Kelamin'     => $Jenis_Kelamin,
        //     'password'  => Hash::make($password)
        // ]);

        // if($user) {
        //     return response()->json([
        //         'success' => true,
        //         'message' => 'Register Berhasil!'
        //     ], 201);
        // } else {
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'Register Gagal!'
        //     ], 400);
        // }
            return redirect('/')->with('success', 'berhasil daftar, silahkan login');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
