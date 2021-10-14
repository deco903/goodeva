<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pribadi extends Model
{
    use HasFactory;
    protected $table = 'kapal_pribadi';
    protected $fillable = ['unit','nama_kapal','owner','penanggung_jawab','kru_karyawan','no_sertifikat','keberangkatan','tgl_berangkat','tujuan','tgl_datang'];

 

}
