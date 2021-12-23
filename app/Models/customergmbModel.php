<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customergmbModel extends Model
{
    use HasFactory;
    protected $table = 'customergmb';
    protected $fillable = ['nama_kapal','nama_barang','pcs'];
}
