<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['prefix' => '/'], function(){

    Route::get('/','LoginController@login')->name('paginaInicial');
    Route::post('/logar','LoginController@verificaLogin')->name('validarLogin');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::get('/home','LoginController@redirecionarPagina')->name('principal')->middleware('login');
    
});

Route::group(['prefix' => 'vip','middleware' => ['login']], function(){
    Route::get('/planos', 'AtivarVipController@showPlanos')->name('planosVip');
    Route::post('/pagamento', 'AtivarVipController@showPagamento')->name('pagamentoVip');
});

Route::group(['prefix' =>'cliente','middleware' => ['login']], function(){

    Route::get('/cadastrar', 'ClienteController@show')->name('paginaCadUser');
    Route::post('/salvar', 'ClienteController@cadastrar')->name('addCliente');
});

Route::group(['prefix' =>'funcionario','middleware' => ['login']], function(){

    Route::get('/cadastrar', 'FuncionarioController@show')->name('paginaCadFunc');    
});

Route::group(['prefix' =>'filme','middleware' => ['login']], function(){

    Route::get('/cadastrar', 'FilmeController@show')->name('paginaCadFilme');
    Route::post('/salvar', 'FilmeController@cadastrarFilme')->name('addFilme');      
});

