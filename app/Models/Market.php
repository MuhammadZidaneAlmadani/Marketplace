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
        'sejarah_pendirian',
        'latitude', // Tambahkan latitude
        'longitude', // Tambahkan longitude
        'foto_utama',
        'foto_galeri',
    ];

    // Jika Anda ingin menambahkan relasi, misalnya dengan `TerasPasar`, tambahkan:
    public function terasPasar()
    {
        return $this->hasMany(TerasPasar::class);
    }
}
