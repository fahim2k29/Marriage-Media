<?php

use Illuminate\Support\Facades\Route;

 Route::group(['prefix' => '/blog'], function (){
    Route::get('/','BlogController@index')->name('backend.blog.index');
    Route::get('/show','BlogController@show')->name('backend.blog.show');
    Route::get('/create','BlogController@create')->name('backend.blog.create');
    Route::post('/store','BlogController@store')->name('backend.blog.store');
    Route::get('/delete/{id}','BlogController@destroy')->name('backend.blog.destroy');
    Route::get('/delivery','BlogController@delivery')->name('backend.blog.delivery');

});
