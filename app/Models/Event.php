<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events'; // Nama tabel di database

    protected $fillable = [
        'judul',
        'tanggal_acara',
        'deskripsi',
        'image', // Tambahkan kolom image ke $fillable
    ];
}
