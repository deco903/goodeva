<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginvspn_m extends Model
{
    use HasFactory;
    protected $table = 'loginvspn';
    protected $fillable = ['keterangan',
                           'waktu',
                           'status',
                           'nama_barang',
                           'stock_awal',
                           'stock',
                           'choose',
                           'update_stock',
                           'unit',
                           'type',
                           'total_stock',
                           'text'
                        ];
}
