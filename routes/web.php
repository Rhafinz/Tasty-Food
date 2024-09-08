<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function (){
        return view('admin.index');
    });
    //untuk route beckend lainnya
});
