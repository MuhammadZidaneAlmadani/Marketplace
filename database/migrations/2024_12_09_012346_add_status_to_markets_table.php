<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToMarketsTable extends Migration
{
    public function up()
    {
        Schema::table('markets', function (Blueprint $table) {
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif')->after('deskripsi');
        });
    }

    public function down()
    {
        Schema::table('markets', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
