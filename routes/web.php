<?php

use App\Http\Controllers\ApiTrivia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ApiTrivia::class, 'jugar'])->name('jugar');
Route::get('/temas', [ApiTrivia::class, 'getTemas'])->name('temas');
Route::get('/preguntas/{tema}', [ApiTrivia::class, 'getPreguntas'])->name('preguntas');