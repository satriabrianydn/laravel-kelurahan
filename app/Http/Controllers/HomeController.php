<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome() {
        return view('home.index');
    }
    public function showProfil() {
        return view('home.profil');
    }
    public function showLayanan() {
        return view('home.layanan');
    }
    public function showBerita() {
        return view('home.berita');
    }
    public function showKontak() {
        return view('home.kontak');
    }
    
}
