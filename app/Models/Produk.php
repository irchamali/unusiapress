<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Produk extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'produk';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        "id_kategori",
        "gambar",
        "nama_produk",
        "penulis",
        "penyunting",
        "edisi",
        "seri",
        "thn_terbit",
        "jum_halaman",
        "tinggi",
        "kategori",
        "jenis",
        "media",
        "deskripsi",
        "harga_jual",
        "harga_jual2",
    ];

}
