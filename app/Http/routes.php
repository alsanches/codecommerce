<?php


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', 'WelcomeController@index');

    Route::get('categories', ['as'=>'categories', 'uses'=>'CategoriesController@index']);
    Route::post('categories/store', ['as'=>'categories.store', 'uses'=>'CategoriesController@store']);
    Route::any('categories/create', ['as'=>'categories.create', 'uses'=>'CategoriesController@create']);
    Route::get('categories/{id}/edit', ['as'=>'categories.edit', 'uses'=>'CategoriesController@edit']);
    Route::get('categories/{id}/destroy',['as'=>'categories.destroy', 'uses'=> 'CategoriesController@destroy']);
    Route::put('categories/{id}/update', ['as'=>'categories.update', 'uses'=>'CategoriesController@update']);

    Route::get('/home', 'HomeController@index');
});
