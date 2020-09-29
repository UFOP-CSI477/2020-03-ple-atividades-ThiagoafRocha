<?php

use App\Http\Controllers\ProdutoController;
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

use App\Models\Produto;

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::resource('/produtos', ProdutoController::class);

//Route::get('/ola', function() {
//    return 'Olá, mundo!';
//});
//
//Route::get('/produtos/todos', function() {
//
//    $produtos = Produto::all();
//
//    return view('listaProdutos', [ 'dados' => $produtos ]);
//});
//
//Route::get('/produtos/{id}', function($id) {
//
//    $produto = Produto::find($id);
//
//    if (!$produto)
//        return 'Id inválido!';
//    
//    return view('listaProdutos', ['dados' => $produto]);
//});