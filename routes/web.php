<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KepegawaianController;
use App\Http\Controllers\AdminController;

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

Route::get('/login', function () {
    return view('/login');
});
Route::get('/login',[AuthController::class,'login']);
Route::post('/postlogin',[AuthController::class,'postlogin']);

Route::get('/dashboard',[DashboardController::class,'index']);

Route::resource('/mahasiswa',MahasiswaController::class);
Route::get('/mhspdf',[MahasiswaController::class,'exportpdf']);

Route::resource('/dosen',DosenController::class);
Route::get('/dosenpdf',[DosenController::class,'exportpdf']);

Route::resource('/kepegawaian',KepegawaianController::class);
Route::get('/gaweanpdf',[KepegawaianController::class,'exportpdf']);

Route::resource('/admin',AdminController::class);