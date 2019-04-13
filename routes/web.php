<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', 'WelcomeController@index')->name('welcome');
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
/*Route::get('/posts/create', 'PostController@create')->name('posts_create');
Route::post('/posts', 'PostController@store')->name('posts_store');
Route::get('/posts/{post}', 'PostController@show')->name('posts_show');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts_edit');
Route::put('/posts/{post}/update', 'PostController@update')->name('posts_update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts_delete');*/
Route::resource('posts','PostController');
Route::post('/posts/{post}/comments', 'CommentController@store')->name('comments_store');
//Route::get('/', 'IndexController@index')->name('home')->middleware('verified');

/*Route::get('/connexion', function () {
    return view('connexion');
});*/


//Route::get('/ho', 'HomeController@IsRole');