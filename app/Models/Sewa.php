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
    protected $fillable = ['unit','nama_kapal','owner','penanggung_jawab','customer','keberangkatan','image','tujuan','tgl_berangkat','tgl_datang','harga_sewa_owner','harga_sewa_customer','keterangan'];

    public function getCreatedAttribute()
    {
        return Carbon::parse($this->attributes['tgl_berangkat'])->translatedFormat('l, d F Y');
    }

    public function Uploadgambar()
    {
        return $this->belongsToMany(kruModel::class);
    }

    public function gambar()
    {
        return $this->hasMany('App\Models\Gambar', 'id_kapal');
    }
}
