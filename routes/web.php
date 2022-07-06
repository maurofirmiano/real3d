<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\ContaController;
use App\Http\Controllers\Site\ServicesController;
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

Route:: get('/',[HomeController::class, '__invoke'])->name('site.home.index');

Route:: get('contato',[ContatoController::class, 'index'])->name('site.contato.index');

Route:: post('contato',[ContatoController::class, 'index']);

Route:: get('sobre',[SobreController::class, 'index'])->name('site.sobre.index');

Route:: get('servico',[ServicesController::class, 'index'])->name('site.servico.index');

Route:: get('conta',[ContaController::class, 'index'])->name('site.conta.index');

Route::post('contato', [ContatoController::class, 'form'])->name('site.contato.form');

