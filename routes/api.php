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

//ini route untuk database ke table surat kematian
Route::post('/srtkematian',[SuratApiController::class,'simpan_srtkematian'] );
Route::get('/show_srtkematian/{id}',[SuratApiController::class,'show_srtkematian'] );
Route::put('/update_srtkematian/{id}',[SuratApiController::class,'update_srtkematian'] );
Route::delete('/destroy_srtkematian/{id}',[SuratApiController::class,'destroy_srtkematian'] );

////ini route untuk database ke table surat mampu
Route::post('/srttdkmampu',[SuratApiController::class,'simpan_srttdkmampu'] );
Route::get('/show_srttdkmampu/{id}',[SuratApiController::class,'show_srttdkmampu'] );
Route::put('/update_srttdkmampu/{id}',[SuratApiController::class,'update_srttdkmampu'] );
Route::delete('/destroy_srttdkmampu/{id}',[SuratApiController::class,'destroy_srttdkmampu'] );

///ini route untuk database ke table surat domisili usaha
Route::post('/srtdomisiliusaha',[SuratApiController::class,'simpan_srtdomisiliusaha'] );
Route::get('/show_srtdomisiliusaha/{id}',[SuratApiController::class,'show_srtdomisiliusaha'] );
Route::put('/update_srtdomisiliusaha/{id}',[SuratApiController::class,'update_srtdomisiliusaha'] );
Route::delete('/destroy_srtdomisiliusaha/{id}',[SuratApiController::class,'destroy_srtdomisiliusaha'] );

///ini route untuk database ke table surat biodata
Route::post('/srtbiodata',[SuratApiController::class,'simpan_srtbiodata'] );
Route::get('/show_srtbiodata/{id}',[SuratApiController::class,'show_srtbiodata'] );
Route::put('/update_srtbiodata/{id}',[SuratApiController::class,'update_srtbiodata'] );
Route::delete('/destroy_srtbiodata/{id}',[SuratApiController::class,'destroy_srtbiodata'] );

///ini route untuk database ke table surat biodata
Route::post('/srtumumdesa',[SuratApiController::class,'simpan_srtumumdesa'] );
Route::get('/show_srtumumdesa/{id}',[SuratApiController::class,'show_srtumumdesa'] );
Route::put('/update_srtumumdesa/{id}',[SuratApiController::class,'update_srtumumdesa'] );
Route::delete('/destroy_srtumumdesa/{id}',[SuratApiController::class,'destroy_srtumumdesa'] );

//ini route untuk databse ke tabel users (register dan login)
Route::post ('auth/register',[apiAuthControllerPage::class,'register'] );
Route::post ('auth/login',[apiAuthControllerPage::class,'login'] );


