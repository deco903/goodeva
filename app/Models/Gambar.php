<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    use HasFactory;
    protected $table ='gambar';
    protected $fillable = ['id_kapal','photo','nama_file','no_izin','tgl_terbitfile','tgl_berakhirfile'];

    
    // public function pribadi()
    // {
    //     return $this->hasOne(Pribadi::class);
    // }
}
