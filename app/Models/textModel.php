<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class textModel extends Model
{
    use HasFactory;
    
    protected $table = 'text';
    protected $fillable = ['note'];
}
