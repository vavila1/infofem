<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuzonController;
use App\Http\Controllers\InstitucionesController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('/buzon',BuzonController::class)->except([
	'index'
]);
Route::resource('/instituciones',InstitucionesController::class);
Route::get('/buzon_index/{indice}',[BuzonController::class,'index'])->name('buzon.index');