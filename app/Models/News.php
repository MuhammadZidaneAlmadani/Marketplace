<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news'; // Nama tabel di database

    protected $fillable = [
        'judul',
        'konten',
        'published_at',
        'image', // Add this line
    ];

}
