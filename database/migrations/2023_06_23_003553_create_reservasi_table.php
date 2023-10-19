<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->integer('kamar_id');
            $table->foreignId('user_id')->constrained();
            $table->string('nama');
            $table->string('no_identitas');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('tipe_kamar');
            $table->date('tanggal_booking');
            $table->time('waktu_booking');
            $table->string('harga_sewa');
            $table->date('tanggal_cekout');
            $table->enum('jenis_pembayaran', ['Tunai', 'Non-Tunai']);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasi');
    }
};
