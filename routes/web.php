<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\DetailRoomsController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\registerRoomController;
use App\Http\Controllers\reservasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [dashboardController::class, 'index']);
Route::get('register', [loginController::class, 'register']);
Route::post('register', [loginController::class, 'store']);
Route::get('/login', [loginController::class, 'index'])->middleware('guest:web')->name('login');
Route::post('/loginAction', [loginController::class, 'login']);
Route::resource('/rooms', RoomsController::class);
Route::get('/detail/{id}',[DetailRoomsController::class, 'detailrooms'])->name('detail');
Route::get('/booking/{id}',[dashboardController::class, 'booking'])->name('booking');
Route::get('/booking-list',[RoomsController::class, 'booking_list'])->name('booking-list');
Route::delete('/booking-list/{id}',[RoomsController::class, 'destroy'])->name('booking.destroy');
Route::post('/booking-kamar',[RoomsController::class, 'store'])->name('booking-kamar');
Route::post('/extend-hari/{id}',[RoomsController::class, 'extends_hari'])->name('booking.extend-hari');
Route::post('/bayar-booking/{id}',[RoomsController::class, 'bayar'])->name('booking.bayar');

Route::middleware('auth')->group(function () {

    Route::post('logout', [loginController::class, 'logout'])->name('logout');
    Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('index');
    // Route::resource('reservasi',[reservasiController::class]);
    Route::get('/table-reservasi',[reservasiController::class,'table_reservasi'])->name('table-reservasi');
    Route::get('/reservasi',[reservasiController::class,'create'])->name('reservasi');
    Route::post('/reservasi/store',[reservasiController::class,'store'])->name('tambah-reservasi');
    Route::get('/tambahkamar', [registerRoomController::class, 'tambah_kamar'])->name('tambahkamar');
    Route::get('/registerRoom',[registerRoomController::class,'index'])->name('registerRoom');
    Route::post('/registerRoom/store',[registerRoomController::class,'store'])->name('store');
    Route::get('/registerRoom/{id}/edit', [registerRoomController::class, 'edit_kamar'])->name('edit-kamar');
    Route::put('/registerRoom/{id}', [registerRoomController::class, 'update_kamar'])->name('update-kamar');
    Route::delete('/registerRoom/{id}', [registerRoomController::class, 'destroy_kamar'])->name('destroy-kamar');
    Route::post('konfirmasi-pembayaran/{id}',[RoomsController::class, 'konfirmasi'])->name('booking.konfirmasi');
    Route::get('/laporan',[laporanController::class,'index'])->name('laporan');
    Route::post('cetak-laporan',[laporanController::class,'cetak_laporan'])->name('cetak-laporan');
});


