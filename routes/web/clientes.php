<?php

  Route::post('clientes/store', 'ProductController@store')->name('clientes.store')
    ->middleware('permission:clientes.create');

    Route::get('clientes', 'ProductController@index')->name('clientes.index')
    ->middleware('permission:clientes.index');

    Route::get('clientes/create' , 'ProductController@create')->name('clientes.create')
    ->middleware('permission:clientes.create');

    Route::put('clientes/{cliente}', 'ProductController@update')->name('clientes.update')
    ->middleware('permission:clientes.edit');

    Route::get('clientes/{cliente}', 'ProductController@show')->name('clientes.show')
    ->middleware('permission:clientes.show');

    Route::delete('clientes/{cliente}', 'ProductController@destroy')->name('clientes.destroy')
    ->middleware('permission:clientes.destroy');

    Route::get('clientes/{cliente}/edit', 'ProductController@edit')->name('clientes.edit')
    ->middleware('permission:clientes.edit');
