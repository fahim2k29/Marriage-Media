<?php

use Illuminate\Support\Facades\Route;

// Offer page
Route::group(['prefix' => '/member'], function (){
    Route::get('/','MemberController@index')->name('backend.member.index');
    Route::get('/show/{id}','MemberController@show')->name('backend.member.show');
    Route::get('/delete/{id}','MemberController@destroy')->name('backend.member.destroy');
});