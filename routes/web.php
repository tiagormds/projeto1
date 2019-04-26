<?php

Route::get('login', 'LoginController@index')->name('login');
Route::post('login', 'LoginController@login')->name('login.entrar');
Route::get('logout', 'LoginController@logout')->name('login.logout');

Route::group(['middleware'=>'auth'], function (){
    Route::resource('/produtos', 'ProdutoController');
    Route::post('/produtos/busca', 'ProdutoController@busca')->name('produtos.busca');

    Route::get('/contato', 'ContatoController@index');
    Route::post('/contato/enviar', 'ContatoController@enviar')->name('contato.enviar');
});