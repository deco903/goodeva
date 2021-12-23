<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginvgmb_m extends Model
{
    use HasFactory;
    protected $table = 'loginvgmb'; 
    protected $fillable = ['keterangan',
                           'waktu',
                           'status',
                           'nama_barang',
                           'stock_awal',
                           'stock',
                           'choose',
                           'update_stock',
                           'unit','type',
                           'total_stock',
                           'text'
                        ];

}
