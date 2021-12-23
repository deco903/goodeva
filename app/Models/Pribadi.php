<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pribadi extends Model
{
    use HasFactory;
    protected $table = 'kapal_pribadi';
    protected $fillable = ['no','keberangkatan','nama_kapal','tujuan','nama_kru','mulai_sewa','nama_penyewa','sewa_selesai','image','myfile','nama_file','nama_perizinan','terbit_file','akhir_file','keterangan'];

    // public function gambar()
    // {
    // 	return $this->belongsTo(gambar::class,'gambar_id');
    // }

}
