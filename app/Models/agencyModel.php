<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agencyModel extends Model
{
    use HasFactory;
    protected $table = 'agency';
    protected $fillable = [
                          'nama_kapal',
                          'voy',
                          'bendera',
                          'gt',
                          'port_asal',
                          'tgl_kedatangan',
                          'muatan_bongkar',
                          'jenis_muatan',
                          'tgl_keberangkatan',
                          'tujuan',
                          'muatan',
                          'detail',
                          'keterangan'  
                        ];
}
