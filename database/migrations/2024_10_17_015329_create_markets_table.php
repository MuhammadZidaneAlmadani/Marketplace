<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('markets', function (Blueprint $table) {
        $table->id();
        $table->string('nama'); // Nama pasar
        $table->text('lokasi'); // Lokasi pasar
        $table->text('deskripsi')->nullable(); // Deskripsi pasar
        $table->date('tanggal_pendirian'); // Tanggal pendirian
        $table->text('sejarah_pendirian')->nullable(); // Sejarah pendirian
        $table->string('foto_utama')->nullable(); // Foto utama (jalur file)
        $table->string('foto_galeri')->nullable(); // Foto galeri (opsional)
        $table->timestamps(); // Waktu pembuatan dan pembaruan
    });
}




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('markets');
    }
};
