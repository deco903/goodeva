<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pribadi extends Model
{
    use HasFactory;
    protected $table = 'kapal_pribadi';
    protected $fillable = ['no','nama_kapal','gambar','keberangkatan','nama_kru','tujuan','nama_penyewa','mulai_sewa','sewa_selesai','keterangan'];

    // public function gambar()
    // {
    // 	return $this->belongsTo(gambar::class,'gambar_id');
    // }

}
