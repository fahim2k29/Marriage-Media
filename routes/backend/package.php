<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/package'], function (){
    Route::get('/','PackageController@index')->name('backend.package.index');
    Route::get('/create','PackageController@create')->name('backend.package.create');
    Route::get('/edit/{id}','PackageController@edit')->name('backend.package.edit');
    Route::post('/store','PackageController@store')->name('backend.package.store');
    Route::get('/delete/{offer}','PackageController@destroy')->name('backend.package.destroy');
    Route::post('/update/{offer}','PackageController@update')->name('backend.package.update');

});