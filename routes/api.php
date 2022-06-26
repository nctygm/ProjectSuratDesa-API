<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\apiAuthControllerPage;


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
//ini route untuk database ke table surat kelahiran
Route::get('/HalamanSurat',[SuratApiController::class,'surat_kelahiran'] );
Route::post('/HalamanSurat',[SuratApiController::class,'simpan'] );
Route::get('/HalamanSurat/{id}',[SuratApiController::class,'show'] );
Route::put('/HalamanSurat/{id}',[SuratApiController::class,'update'] );
Route::delete('/HalamanSurat/{id}',[SuratApiController::class,'destroy'] );

//ini route untuk databse ke tabel users (register dan login)
Route::get ('halamanlogin',[apiAuthControllerPage::class,'dashboardakun'] );
Route::post ('auth/register',[apiAuthControllerPage::class,'register'] );
Route::post ('auth/login',[apiAuthControllerPage::class,'login'] );


