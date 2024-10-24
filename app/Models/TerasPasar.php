<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerasPasar extends Model
{
    use HasFactory;

    protected $table = 'teras_pasar'; // Nama tabel di database

    protected $fillable = [
        'nama_toko',
        'deskripsi',
        'foto',
        'digitalisasi_data',
        'pembayaran_retribusi_elektronik',
    ];

    // Jika Teras Pasar terkait dengan `Market`, tambahkan relasi berikut:
    public function market()
    {
        return $this->belongsTo(Market::class);
    }
}
