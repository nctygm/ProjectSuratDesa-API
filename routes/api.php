<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratApiController;

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

Route::get('/HalamanSurat',[SuratApiController::class,'surat_kelahiran'] );
Route::post('/HalamanSurat',[SuratApiController::class,'simpan'] );
Route::get('/HalamanSurat/{id}',[SuratApiController::class,'show'] );
Route::put('/HalamanSurat/{id}',[SuratApiController::class,'update'] );
Route::delete('/HalamanSurat/{id}',[SuratApiController::class,'destroy'] );