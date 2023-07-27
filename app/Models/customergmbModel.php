<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customergmbModel extends Model
{
    use HasFactory;
    protected $table = 'customergmb';
    protected $fillable = ['nama_barang',
                            'harga_beli',
                            'harga_jual',
                            'unit',
                            'stock_awal',
                            'stock',
                            'choose',
                            'update_stock',
                            'type',
                            'total_stock',
                            'text'
                        ];
}
