<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\TentangController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RoumiddlewareteServiceProvider within a group which
| is assigned the "api"  group. Enjoy building your API!
|
*/

Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    // User routes
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    // Berita routes (Hanya bisa diakses setelah login)
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::get('/tentang', [TentangController::class, 'index']);       // Get all berita
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});
