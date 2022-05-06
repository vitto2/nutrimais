<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TabelaNutriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreController;

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

Route::get('/' ,[HomeController::class, 'home'])->name('home');
Route::get('/contato',[ContatoController::class, 'contato'])->name('contato');

Route::get('/sobre', [SobreController::class, 'sobre'])-> name('sobre');

Route::get('/login', [LoginController::class, 'login'])-> name('login');

Route::get('/tabela-nutricional', [TabelaNutriController::class, 'tabela'])-> name('tabela');
