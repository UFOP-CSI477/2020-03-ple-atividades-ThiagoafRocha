<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ColetaController;
use App\Http\Controllers\GeralController;
use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('pages.principal');
});

Route::resource('area-geral', GeralController::class);
Route::resource('area-admin', AdminController::class)->middleware('auth');
Route::resource('pessoas', PessoaController::class)->middleware('auth');
Route::resource('coletas', ColetaController::class)->middleware('auth');
Route::resource('agendamentos', AgendamentoController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
