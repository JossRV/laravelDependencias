<?php

use App\Http\Controllers\categorias;
use App\Http\Controllers\pagina;
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

Route::get('/',[categorias::class,'Index']);
Route::get('/welcome',[pagina::class,'Index']);