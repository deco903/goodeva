<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pribadi extends Model
{
    use HasFactory;
    protected $table = 'kapal_pribadi';
    protected $fillable = ['kru_id','customer','nama_kapal','gambar','keberangkatan','nama_kru','tujuan','nama_penyewa','mulai_sewa','sewa_selesai','harga_sewa_customer','keterangan'];

    public function kruModel()
    {
        return $this->belongsToMany(kruModel::class);
    }

    // public function getkruModelAttribute() {
    //     return $this->kruModel->pluck('nama_kru')->toArray();
    // }

    public function setkruModelAttribute($value)
    {
        $this->attributes['nama_kru'] = json_encode($value);
    }

    public function getkruModelAttribute($value)
    {
        return $this->attributes['nama_kru'] = json_decode($value);
    }

    public function gambar()
    {
        return $this->hasMany('App\Models\Gambar', 'id_kapal');
    }
}
