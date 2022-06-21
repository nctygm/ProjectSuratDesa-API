<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;

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

Route::get('/HalamanSurat',[SuratController::class,'surat_kelahiran'] );
Route::get('/HalamanSurat/create',[SuratController::class,'create'] );
Route::post('/HalamanSurat',[SuratController::class,'simpan'] );
Route::get('/HalamanSurat/{id}/edit',[SuratController::class,'edit'] );
Route::put('/HalamanSurat/{id}',[SuratController::class,'update'] );
Route::delete('/HalamanSurat/{id}',[SuratController::class,'destroy'] );



