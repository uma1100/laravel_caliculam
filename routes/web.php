<?php

Route::get('/', 'PostController@index');

// @FIXME Grouping 
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@getCreate');
Route::post('/posts/create', 'PostController@postCreate');

Route::get('/posts/{id}', 'PostController@show');
