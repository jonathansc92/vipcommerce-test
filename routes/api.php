<?php

use Illuminate\Support\Facades\Route;

Route::namespace('API')->name('api.')->group(function () {
    Route::prefix('produtos')->group(function () {
        Route::get('/', 'ProdutosController@index');
        Route::get('/{id}', 'ProdutosController@show');
        Route::post('/', 'ProdutosController@store');
        Route::put('/{id}', 'ProdutosController@update');
        Route::delete('/{id}', 'ProdutosController@delete');
    });

    Route::prefix('clientes')->group(function () {
        Route::get('/', 'ClientesController@index');
        Route::get('/{id}', 'ClientesController@show');
        Route::post('/', 'ClientesController@store');
        Route::put('/{id}', 'ClientesController@update');
        Route::delete('/{id}', 'ClientesController@delete');
    });

    Route::prefix('pedidos')->group(function () {
        Route::get('/', 'PedidosController@index');
        Route::get('/{id}', 'PedidosController@show');
        Route::post('/', 'PedidosController@store');
        Route::put('/{id}', 'PedidosController@update');
        Route::delete('/{id}', 'PedidosController@delete');
        Route::post('/{id}/sendmail', 'PedidosController@sendmail');
        Route::post('/{id}/report', 'PedidosController@report');
    });

    Route::prefix('pedidos-produtos')->group(function () {
        Route::get('/', 'PedidosProdutosController@index');
        Route::get('/{id}', 'PedidosProdutosController@show');
        Route::post('/', 'PedidosProdutosController@store');
        Route::put('/{id}', 'PedidosProdutosController@update');
        Route::delete('/{id}', 'PedidosProdutosController@delete');
    });
});
