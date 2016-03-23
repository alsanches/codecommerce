<?php


Route::get('/', 'WelcomeController@index');

Route::put('exemplo', 'WelcomeController@exemplo');


//Route::match(['get','post'], '/exemplo2', function(){
//    return 'oi';
//});
//
//Route::any('/exemplo2', function(){
//    return 'Any'
//});



Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
