<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\GeralController;
use App\Http\Controllers\GrupoEquipController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UserController;
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
    return view('/pages/principal');
});

Route::resource('/equipamentos', EquipamentoController::class)->middleware('auth');
Route::resource('/registros', RegistroController::class);
Route::resource('/area-geral', GeralController::class);
Route::resource('/area-admin', AdminController::class);
Route::resource('/users', UserController::class);
Route::resource('/grupo-equipamento', GrupoEquipController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
