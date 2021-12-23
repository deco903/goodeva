<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spnexel_M extends Model
{
    use HasFactory;
    protected $table = 'spnexel';
    protected $fillable = ['waktu','nama_barang','unit','total_stock','text'];
}
