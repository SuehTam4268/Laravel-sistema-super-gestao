<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Echo_;

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

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'App\Http\Controllers\SobreNosController@sobreNos')->name('site.sobrenos');;
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::POST('/contato', 'App\Http\Controllers\ContatoController@salvar')->name('site.contato');
Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores','App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos',function(){return 'Produtos';})->name('app.produtos');
});
Route::get('/teste/{p1}/{p2}','App\Http\Controllers\TesteController@teste')->name('teste');




Route::fallback(function(){
    echo('A rota Acessada não existe, <a href="' .route('site.index'). '"> clique aqui </a> apra reotrnar a página inicial');
});