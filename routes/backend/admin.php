<?php

use Illuminate\Support\Facades\Route;

 Route::group(['prefix' => '/admin345'], function (){

    Route::get('/','AdminController@index')->name('backend.admin.index');
    Route::get('/create','AdminController@create')->name('backend.admin.create');
    Route::get('/edit/{id}','AdminController@edit')->name('backend.admin.edit');
    Route::post('/store','AdminController@store')->name('backend.admin.store');
    Route::get('/delete/{offer}','AdminController@destroy')->name('backend.admin.destroy');
    Route::post('/update/{offer}','AdminController@update')->name('backend.admin.update');    
});