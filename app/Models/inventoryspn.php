<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventoryspn extends Model
{
    use HasFactory;
    protected $table = 'inventoryspn'; 
    protected $fillable = ['nama_barang','unit','stock','choose','update_stock','type','total_stock','text'];
}
