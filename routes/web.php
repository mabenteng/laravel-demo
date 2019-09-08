<?php



Route::get('/', function () {
    return view('welcome');
});
Route::any('/ind', 'Home\IndexController@ind');
Route::get('/list', 'Home\IndexController@listp');
Route::any('/xiugai/{id?}', 'Home\IndexController@xiugai');
//Route::get('/home', 'Home\IndexController@index');
