<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {

    return view('home');
});

Auth::routes(['register' => false]);

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
    Route::resource('message', App\Http\Controllers\MessageController::class);
    Route::resource('slider', App\Http\Controllers\SliderController::class);
    Route::resource('resep', App\Http\Controllers\ResepController::class);
    Route::resource('user', App\Http\Controllers\UsersController::class);
});

Route::get('/', [FrontController::class, 'home']);
Route::get('galeri', [FrontController::class, 'galeri'])->name('galeri');
Route::get('tentang', [FrontController::class, 'tentang'])->name('tentang');
Route::get('berita', [FrontController::class, 'berita'])->name('berita');
Route::get('news/{slug}', [App\Http\Controllers\FrontController::class, 'postNews'])->name('berita.show');
Route::get('berita/load-more', [FrontController::class, 'loadMore'])->name('newsLoad');
Route::get('kontak', [FrontController::class, 'kontak'])->name('kontak');
Route::post('kontak',[App\Http\Controllers\MessageController::class,'store'])->name('message.store');
