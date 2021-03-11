<?php

use Illuminate\Support\Facades\Route;
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


Route::get('segi-empat/inputSegiEmpat', 'App\Http\Controllers\SegiEmpatController@inputSegiEmpat')
        ->name('segi-empat.inputSegiEmpat');
       
Route::post('segi-empat/hasil', 'App\Http\Controllers\SegiEmpatController@hasil')
        ->name('segi-empat.hasil'); 
        
Route::get('segi-empat/inputBalok','App\Http\Controllers\SegiEmpatController@inputBalok')
        ->name('segi-empat.inputBalok');
       
Route::post('segi-empat/hasilBalok', 'App\Http\Controllers\SegiEmpatController@hasilBalok')
        ->name('segi-empat.hasilBalok');

Route::resource('propinsi','App\Http\Controllers\PropinsiController');