<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel `contacts` dan menambahkan kolom `message`.
     */
    public function up(): void
    {
        // Membuat tabel `contacts`
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('first_name'); // Kolom nama depan
            $table->string('last_name'); // Kolom nama belakang
            $table->string('email'); // Kolom email
            $table->string('phone')->nullable(); // Kolom telepon (opsional)
            $table->string('country'); // Kolom negara
            $table->text('message')->nullable(); // Kolom pesan (opsional)
            $table->timestamps(); // Kolom waktu (created_at, updated_at)
        });

        // Tambahan untuk memastikan kolom `message` ada di tabel `contacts` (jika sudah ada tabel sebelumnya)
        if (Schema::hasTable('contacts') && !Schema::hasColumn('contacts', 'message')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->text('message')->nullable(); // Menambahkan kolom `message` jika belum ada
            });
        }
    }

    /**
     * Undo migrasi.
     */
    public function down(): void
    {
        // Menghapus kolom `message` jika ada
        if (Schema::hasTable('contacts') && Schema::hasColumn('contacts', 'message')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->dropColumn('message');
            });
        }

        // Menghapus tabel `contacts` jika ada
        Schema::dropIfExists('contacts');
    }
};
