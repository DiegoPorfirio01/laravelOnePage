<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\NovidadeController;
use App\Http\Controllers\DepoimentoController;
use App\Http\Controllers\RodapeContatoController;
use App\Http\Controllers\RodapeEnderecoController;
use App\Http\Controllers\RodapeHorarioController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);

Route::get('/header/{id}/edit', [HeaderController::class, 'edit'])->middleware('auth');
Route::put('/header/update/{id}', [HeaderController::class, 'update'])->middleware('auth');


Route::get('/novidades', [NovidadeController::class, 'index'])->middleware('auth');
Route::get('/novidades/create', [NovidadeController::class, 'create'])->middleware('auth');
Route::post('/novidades', [NovidadeController::class, 'store'])->middleware('auth');
Route::get('/novidades/{id}/edit', [NovidadeController::class, 'edit'])->middleware('auth');

Route::put('/novidades/update/{id}', [NovidadeController::class, 'update'])->middleware('auth');
Route::delete('novidades/{id}', [NovidadeController::class, 'destroy']);


Route::get('/depoimentos', [DepoimentoController::class, 'index'])->middleware('auth');
Route::get('/depoimentos/create', [DepoimentoController::class, 'create'])->middleware('auth');
Route::post('/depoimentos', [DepoimentoController::class, 'store'])->middleware('auth');
Route::get('/depoimentos/{id}/edit', [DepoimentoController::class, 'edit'])->middleware('auth');

Route::put('/depoimentos/update/{id}', [DepoimentoController::class, 'update'])->middleware('auth');
Route::delete('depoimentos/{id}', [DepoimentoController::class, 'destroy']);


Route::get('/rodapehorarios/{id}/edit', [RodapeHorarioController::class, 'edit'])->middleware('auth');
Route::put('/rodapehorarios/update/{id}', [RodapeHorarioController::class, 'update'])->middleware('auth');

Route::get('/rodapeenderecos/{id}/edit', [RodapeEnderecoController::class, 'edit'])->middleware('auth');
Route::put('/rodapeenderecos/update/{id}', [RodapeEnderecoController::class, 'update'])->middleware('auth');

Route::get('/rodapecontatos/{id}/edit', [RodapeContatoController::class, 'edit'])->middleware('auth');
Route::put('/rodapecontatos/update/{id}', [RodapeContatoController::class, 'update'])->middleware('auth');
