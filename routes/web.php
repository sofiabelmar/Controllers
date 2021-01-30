<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NoticiaController;

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

Route::get('/', [inicioController::class, "index"]);
Route::get('/contacto', [inicioController::class,"contacto"]);

Route::get('/noticias', [NoticiaController:: class, "lista"])->name("noticias");
Route::get('/noticias/{noticia}',[NoticiaController::class, "detalles"])->name("noticias.detalles");
