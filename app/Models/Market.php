<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $table = 'markets'; // Nama tabel di database


    protected $fillable = [
        'nama',
        'lokasi',
        'deskripsi',
        'tanggal_pendirian',
        'latitude',
        'longitude',
        'foto_utama',
    ];

    protected $dates = ['tanggal_pendirian']; // Pastikan ini ada
}
