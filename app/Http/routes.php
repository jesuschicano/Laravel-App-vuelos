<?php

Route::get('/', 'VuelosController@index');

Route::get('/insertar', 'VuelosController@insertarForm');
Route::post('/crear', 'VuelosController@insertar');
