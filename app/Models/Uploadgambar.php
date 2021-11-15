<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadgambar extends Model
{
    use HasFactory;
    protected $table ='gambar';
    protected $fillable = ['photo','nama_file','no_izin','tgl_terbitfile','tgl_berakhirfile'];
    
    
    public function sewa()
    {
        return $this->hasMany(Sewa::class);
    }
}
