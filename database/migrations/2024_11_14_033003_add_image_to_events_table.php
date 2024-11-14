<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToEventsTable extends Migration
{
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('image')->nullable()->after('deskripsi'); // Menambahkan kolom image setelah deskripsi
        });
    }

    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('image'); // Menghapus kolom image jika migrasi di-rollback
        });
    }
}
