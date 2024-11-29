<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Cek apakah tabel 'news' memiliki kolom 'image'
        if (!Schema::hasColumn('news', 'image')) {
            Schema::table('news', function (Blueprint $table) {
                $table->string('image')->nullable(); // Tambahkan kolom `image` jika belum ada
            });
        }
    }

    public function down(): void
    {
        // Hapus kolom `image` jika ada
        if (Schema::hasColumn('news', 'image')) {
            Schema::table('news', function (Blueprint $table) {
                $table->dropColumn('image');
            });
        }
    }
};
