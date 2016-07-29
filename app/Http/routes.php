<?php

Route::get('/', 'VuelosController@index');

Route::get('/insertar', 'VuelosController@insertarForm');
Route::post('/crear', 'VuelosController@insertar');

Route::get('/edit/{id}', 'VuelosController@preEdit');
Route::post('/mod/{id}', 'VuelosController@edit');

Route::get('/borra/{id}', 'VuelosController@borra');
