<?php

use App\Http\Controllers\PrincipalController;
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

Route::get('/', [PrincipalController::class, 'Index'])->name('index');

Route::get('/sobre', [PrincipalController::class, 'Sobre'])->name('sobre');

Route::get('/produtos/forro-liso',[PrincipalController::class, 'ForroLiso'])->name('forro-liso');

Route::get('/produtos/molduras',[PrincipalController::class, 'Molduras'])->name('molduras');

Route::get('/produtos/gesso-acartonado',[PrincipalController::class, 'GessoAcartonado'])->name('gesso-acartonado');

Route::get('/produtos/sancas',[PrincipalController::class, 'Sancas'])->name('sancas');

Route::get('/produtos/colunas',[PrincipalController::class, 'Colunas'])->name('colunas');

Route::get('/produtos/gesso-decorado',[PrincipalController::class, 'GessoDecorado'])->name('gesso-decorado');

