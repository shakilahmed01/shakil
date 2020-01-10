<?php

//product conroller
Route::get('/product','productController@index');
Route::post('/product/create','productController@create')->name('product_create');
Route::post('/product/update','productController@update')->name('product_update');
Route::get('/product/list','productController@product_list')->name('product_list');
Route::get('/product/list/{product_id}','productController@single_list')->name('single_list');
Route::get('/product/delete/{product_id}','productController@delete')->name('product_delete');


//product controller end


//information controller

Route::get('/user/information','InformationController@index');
Route::post('/user/information/create','InformationController@create')->name('information_create');
Route::post('/user/information/update','InformationController@update')->name('information_update');
Route::get('/user/information/list','InformationController@information_list')->name('information_list');
Route::get('/user/information/list/{information_id}','InformationController@single_list')->name('single_list');
Route::get('/user/information/delete/{information_id}','InformationController@delete')->name('information_delete');
//information controller end


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
