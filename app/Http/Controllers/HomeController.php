<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('admin.home');
    }
   
    public function history_km(){
        return view('admin.history_km');
    }
    
}