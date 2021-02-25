<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//soal1
//Tampilkan artikel dengan id=1 users_id=1
Route::get('soal1','App\Http\Controller\BabsatuController@a1');

//soal2
//Tampilkan artikel dengan id=1 id=1
Route::get('soal2','App\Http\Controller\BabsatuController@a2');

//soal3
//Tampilkan artikel dengan id=1 users_id=1
Route::get('soal3','App\Http\Controller\BabsatuController@a3');



Route::apiresource('artikel',App\Http\Controllers\ArtikelAPIController::class);
Route::apiresource('kategori_artikel',App\Http\Controllers\KategoriArtikelAPIController::class);
Route::apiresource('berita',App\Http\Controllers\BeritaAPIController::class);
Route::apiresource('kategori_berita',App\Http\Controllers\KategoriBeritaAPIController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
