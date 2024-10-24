<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('teras_pasar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko'); // Nama Toko di Teras Pasar
            $table->text('deskripsi')->nullable(); // Deskripsi toko
            $table->string('foto')->nullable(); // Foto Toko
            $table->boolean('digitalisasi_data')->default(false); // Indikator digitalisasi data pasar
            $table->boolean('pembayaran_retribusi_elektronik')->default(false); // Pembayaran retribusi secara elektronik
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('teras_pasar');
    }
};
