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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Judul acara
            $table->date('tanggal_acara'); // Tanggal acara
            $table->text('deskripsi')->nullable(); // Deskripsi acara (opsional)
            $table->timestamps(); // Waktu pembuatan dan pembaruan
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
