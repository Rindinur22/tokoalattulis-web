<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatTulis extends Model
{
    use HasFactory;

    protected $table = 'alat_tulis';

    protected $fillable = [
        'nama',
        'kategori',
        'harga',
        'stok',
        'deskripsi',
        'gambar'
    ];

    protected $casts = [
        'harga' => 'decimal:2',
    ];
}