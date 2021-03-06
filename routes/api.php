<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/cek_kata', [ApiController::class, 'cekKata']);
Route::post('/save_berita', [ApiController::class, 'save_berita']);
Route::get('/get_berita', [ApiController::class, 'getBerita']);
Route::get('/update_berita/{status}/{id}', [ApiController::class, 'updateBerita']);
Route::get('/cekBerita/{id}', [ApiController::class, 'cekBerita']);
