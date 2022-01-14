<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home');
});

Route::get('beranda', function(){
    return view('admin.home');
})->name('beranda');

Route::get('tentang', function(){
    return view('admin.about');
})->name('tentang');

Route::get('berita', function(){
    return view('admin.news');
})->name('berita');

Route::get('galeri', function(){
    return view('admin.galery');
})->name('galeri');

Route::get('kontak', function(){
    return view('admin.kontak');
})->name('kontak');

Route::resource('Kontak', KontakController::class);
