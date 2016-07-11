<?php

Route::get('/header',function(){
  return response("Hello", 200)->header('Content-Type', 'text/html');
});

Route::get('/cookie',function(){
   return response("Hello", 200)->header('Content-Type', 'text/html')
      ->withcookie('name','Virat Gandhi');
});


Route::get('insert', 'StudInsertController@insertform');
Route::post('create', 'StudInsertController@insert');
Route::get('view', 'StudViewController@index');
