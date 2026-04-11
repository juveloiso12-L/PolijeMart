<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualans';
    protected $fillable = [
        'id',
        'user_id',
        'tanggal_penjualan',
        'total_bayar',
        'status',
    ];
}
