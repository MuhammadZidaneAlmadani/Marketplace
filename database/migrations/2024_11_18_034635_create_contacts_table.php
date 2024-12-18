<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel `contacts`.
     */
    public function up(): void
    {
        // Membuat tabel `contacts`
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('first_name'); // Nama depan
            $table->string('last_name'); // Nama belakang
            $table->string('email'); // Email
            $table->string('phone')->nullable(); // Nomor telepon (opsional)
            $table->string('country')->nullable(); // Negara (opsional)
            $table->text('message');
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Undo migrasi.
     */
    public function down(): void
    {
        // Menghapus tabel `contacts` jika ada
        Schema::dropIfExists('contacts');
    }
};
