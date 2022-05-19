<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uController;
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

Route::get('/',[uController::class,'index']);
Route::get('/reg',[uController::class,'reg']);
Route::post('/regAction',[uController::class,'regAction']);