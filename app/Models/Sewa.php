<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Sewa extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = 'kapal_sewa';
    protected $fillable = ['gambar','unit','nama_kapal','owner','penanggung_jawab','kru_karyawan','no_sertifikat','keberangkatan','tujuan','tgl_berangkat','tgl_datang','keterangan'];

    public function gambar(){
        return $this->belongsTo(Gambar::class);
    }

    public function getCreatedAttribute()
    {
        return Carbon::parse($this->attributes['tgl_berangkat'])->translatedFormat('l, d F Y');
    }
}
