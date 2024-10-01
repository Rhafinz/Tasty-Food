<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function (){
        return view('admin.index');
    });
    //untuk route beckend lainnya
    Route::resource('galeri', App\Http\Controllers\GaleryController::class);
    Route::resource('tentang', App\Http\Controllers\TentangController::class);
    Route::resource('berita', App\Http\Controllers\BeritaController::class);
    Route::resource('kontak', App\Http\Controllers\KontakController::class);
});

Route::get('/', [FrontController::class, 'home']);
Route::get('galeri', [FrontController::class, 'galeri'])->name('galeri');
Route::get('tentang', [FrontController::class, 'tentang'])->name('tentang');
