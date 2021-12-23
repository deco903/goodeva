<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gmbexel_m extends Model
{
    use HasFactory;
    protected $table = 'gmbexel';
    protected $fillable = ['waktu','nama_barang','unit','total_stock','text'];
}
