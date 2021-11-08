<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginvspn_m extends Model
{
    use HasFactory;

    protected $table = 'loginvspn';
    protected $fillable = ['keterangan','waktu','nama_barang','stock','choose','update_stock','unit','type','total_stock','text'];
}
