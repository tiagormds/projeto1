<?php

Route::resource('/produtos', 'ProdutoController');
Route::post('/produtos/busca', 'ProdutoController@busca')->name('produtos.busca');