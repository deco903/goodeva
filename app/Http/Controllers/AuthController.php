<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('admin.auth.login');
    }

    public function reset_password() {
        return view('admin.auth.reset_password');
    }

    public function konf_email() {
        return view('admin.auth.konf_email');
    }

    public function laporan_mail() {
        return view('admin.auth.laporan_mail');
    }
}
