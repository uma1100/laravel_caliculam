<?php

Route::get('/', 'PostController@index');

// @FIXME Grouping 
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@getCreate');
Route::post('/posts/create', 'PostController@postCreate');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::get('/posts/{id}', 'PostController@show');
Route::post('/posts/update/{id}', 'PostController@update');
Route::delete('/posts/{id}', 'PostController@destroy');

