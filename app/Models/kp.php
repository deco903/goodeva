<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kp extends Model
{
    use HasFactory;
    protected $table='kp';
    protected $fillable=['nama_kapal','keberangkatan','kru_kapal','tujuan','nama_penyewa','tgl_keberangkatan','tgl_tiba','keterangan','photo','nama_file','no_izin','tgl_terbitfile','tgl_berakhirfile'];

}
