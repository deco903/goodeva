<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;
    protected $table = 'kapal_sewa';
    protected $fillable = ['unit','nama_kapal','owner','penanggung_jawab','kru_karyawan','no_sertifikat','keberangkatan','tujuan','tgl_berangkat','tgl_datang'];
}
