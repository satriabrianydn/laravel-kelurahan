<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin() {
        return 'ini adalah halaman login';
    }
    public function showRegister() {
        return 'ini adalah halaman register';
    }
}
