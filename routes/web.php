<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\AuthControllerPage;

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
Route::get('/',function (){
    return view ('welcome');
} );

//ini route untuk database surat kelahiran
Route::get('/HalamanSurat',[SuratController::class,'surat_kelahiran'] );
Route::get('/HalamanSurat/create',[SuratController::class,'create'] );
Route::post('/HalamanSurat',[SuratController::class,'simpan'] );
Route::get('/HalamanSurat/{id}/edit',[SuratController::class,'edit'] );
Route::put('/HalamanSurat/{id}',[SuratController::class,'update'] );
Route::delete('/HalamanSurat/{id}',[SuratController::class,'destroy'] );

//ini route untuk databser user (register dan login)
Route::get ('halamanlogin',[AuthControllerPage::class,'dashboardakun'] );
Route::get ('halamanlogin/registerakun',[AuthControllerPage::class,'register'] );
Route::post ('halamanlogin',[AuthControllerPage::class,'simpan'] );

