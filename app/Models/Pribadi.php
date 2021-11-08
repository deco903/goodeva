<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pribadi extends Model
{
    use HasFactory;
    protected $table = 'kapal_pribadi';
    protected $fillable = ['nama_kapal','gambar_id','keberangkatan','kru_kapal','tujuan','nama_penyewa','tgl_keberangkatan','tgl_tiba','keterangan'];

    // public function gambar()
    // {
    // 	return $this->belongsTo(gambar::class,'gambar_id');
    // }

}
