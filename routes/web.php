<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
    "title" => "HOME"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    "title"  => "ABOUT",
    "nama"   => "NAMA LENGKAP         : REZA ANUGRAH MEINANDA PUTRA",
    "ttl"    => "TTL    : PONTIANAK, 19 Mei 2000",
    "jk"     => "JENIS KELAMIN : PRIA",
    "alamat"  => "ALAMAT : JL.PARIT TENGKORAK",
    "email"  => "EMAIL : rampingkurus897@gmail.com",
    "img"    => "sugiono.jpg"
    ]);
});

Route::get('/news', [BeritaController::class, 'index']);

Route::get('/news/{news_detil:slug}',[BeritaController::class, 'show']);
Route::get('/login',[LoginController::class, 'index']);
Route::get('/register',[RegisterController::class, 'index']);