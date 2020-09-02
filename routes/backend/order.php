<?php

use Illuminate\Support\Facades\Route;

 Route::group(['prefix' => '/blog'], function (){
    Route::get('/','OrderController@index')->name('backend.order.index');
    Route::get('/show','OrderController@show')->name('backend.order.show');
    Route::get('/create','OrderController@create')->name('backend.order.create');
    Route::post('/store','OrderController@store')->name('backend.order.store');
    Route::get('/delete/{id}','OrderController@destroy')->name('backend.order.destroy');
    Route::get('/delivery','OrderController@delivery')->name('backend.order.delivery');

});
