<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kruModel extends Model
{
    use HasFactory;
    protected $table = 'kru';
    protected $fillable = ['photo',
                           'nama',
                           'tempat_lahir',
                           'tgl_lahir',
                           'jenis_kelamin',
                           'identitas',
                           'no_identitas',
                           'provinsi',
                           'kota',
                           'RT',
                           'RW',
                           'kecamatan',
                           'kelurahan',
                           'alamat',
                           'email',
                           'nama_sertifikat',
                           'no_sertifikat',
                           'tgl_gabung',
                           'status',
                           'sign_off',
                           'status_perkawinan',
                           'npwp',
                           'jabatan'
                        ]; 
}
