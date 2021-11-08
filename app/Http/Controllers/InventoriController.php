<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoriController extends Controller
{
    public function index(){
        return view('admin.inventori.inventory');
    }
}
