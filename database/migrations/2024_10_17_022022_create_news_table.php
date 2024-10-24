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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Judul berita
            $table->text('konten'); // Isi berita
            $table->timestamp('published_at')->nullable(); // Waktu publikasi (opsional)
            $table->timestamps(); // Waktu pembuatan dan pembaruan
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
