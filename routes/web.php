<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckNewsController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function(){
    return view('login');
});

Route::post('/cekLogin', [AuthController::class, 'cek_login']);

Route::get('list-hoax', [HomeController::class, 'listHoax']);
Route::get('home', [HomeController::class, 'Home']);
Route::get('new-post', [HomeController::class, 'addNew']);
Route::get('new-post/{id}', [HomeController::class, 'addNew']);

// Route::post('save-news', [CheckNewsController::class, 'save_berita']);