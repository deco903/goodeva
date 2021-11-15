<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = 'vendor';
    protected $fillable = ['image','phone','mobile','nama_perusahaan','email','nama_pic','website','jabatan','provinsi','kota','kecamatan','kelurahan','rt','rw','alamat_lengkap'];

}
