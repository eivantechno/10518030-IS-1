<?php

namespace App\Models;

class produk extends Model 
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = [
        'kategori_produk',
        'nama_produk',
        'stok',
        'harga_produk',
        'foto_produk'
    ];

}
