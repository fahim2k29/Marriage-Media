<?php

use Illuminate\Support\Facades\Route;

 Route::group(['prefix' => '/contactUs'], function (){
    Route::get('/','ContactUsController@index')->name('backend.contact.index');
    Route::post('/update','ContactUsController@update')->name('backend.contact.update');
    Route::post('/query/messages','ContactUsController@queryMessages')->name('backend.query.messages');

});
