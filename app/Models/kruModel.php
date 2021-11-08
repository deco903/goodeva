<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kruModel extends Model
{
    use HasFactory;
    protected $table = 'kru';
    protected $fillable = ['photo','phone','nama','email','tempat_lahir','tgl_lahir','nama_sertifikat','no_sertifikat','jenis_kelamin','tgl_gabung','identitas','no_identitas','status','provinsi','kota','kecamatan','kelurahan','rt','rw','alamat']; 
}
