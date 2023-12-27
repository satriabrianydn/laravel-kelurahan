<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route Home
Route::get('/', [HomeController::class, 'showHome'])->name('home.index');
Route::get('/profil', [HomeController::class, 'showProfil'])->name('home.profil');
Route::get('/layanan', [HomeController::class, 'showLayanan'])->name('home.layanan');
Route::get('/kontak', [HomeController::class, 'showKontak'])->name('home.kontak');

// Route Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Route Berita
Route::get('/berita', [BeritaController::class, 'showBerita'])->name('home.berita');
Route::get('/berita/tambah', [BeritaController::class, 'showTambahBerita'])->name('tambah.berita');
Route::post('/berita/tambah/process', [BeritaController::class, 'addBeritaProcess'])->name('addberita.process');