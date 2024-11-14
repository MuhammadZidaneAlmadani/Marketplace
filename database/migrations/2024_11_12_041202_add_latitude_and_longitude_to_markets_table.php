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
    Schema::table('markets', function (Blueprint $table) {
        $table->double('latitude')->nullable()->after('foto_galeri'); // Menambahkan kolom latitude
        $table->double('longitude')->nullable()->after('latitude');   // Menambahkan kolom longitude
    });
}

public function down()
{
    Schema::table('markets', function (Blueprint $table) {
        $table->dropColumn('latitude');
        $table->dropColumn('longitude');
    });
}
};
