<?php


Route::get('/', 'WelcomeController@index');

Route::get('categories', 'CategoriesController@index');

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
