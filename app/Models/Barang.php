<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'deskripsi',
        'kategori_id',
        'stok',
        'harga',
        'image',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}