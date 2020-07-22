<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/user/dashboard', 'HomeController@user_dashboard')->name('user_dashboard');
    Route::post('/signup/create_one', 'HomeController@register_create_one')->name('register_create_one');


Route::get('/setinfo', 'SetController@index')->name('setInfo');
Route::post('/setinfo/create', 'SetController@create')->name('setInfo_create');


Route::get('/', 'MainController@index')->name('single');
    Route::get('/signup', 'MainController@register_form_one')->name('register_form_one');
    
    Route::get('/signup/aboutme', 'MainController@aboutme')->name('aboutme');
        Route::post('/signup/aboutme/create', 'MainController@aboutme_create')->name('aboutme_create');

    Route::get('/signup/education', 'MainController@education')->name('education');
        Route::post('/signup/education/create', 'MainController@education_create')->name('education_create');

    Route::get('/signup/personal', 'MainController@personal')->name('personal');
        Route::post('/signup/personal/create', 'MainController@personal_create')->name('personal_create');
    
    Route::get('/signup/religion', 'MainController@religion')->name('religion');
        Route::post('/signup/religion/create', 'MainController@religion_create')->name('religion_create');

    Route::get('/signup/officeUse', 'MainController@officeUse')->name('officeUse');
        Route::post('/signup/officeUse/create', 'MainController@officeUse_create')->name('officeUse_create');
    
    Route::get('/signup/addPhoto', 'MainController@addPhoto')->name('addPhoto');
        Route::post('/signup/addPhoto/create', 'MainController@addPhoto_create')->name('addPhoto_create');



   //Route::get('/form', 'MainController@form')->name('form');


Route::get('/search', 'SearchController@index')->name('search_quick');
    Route::get('/religion', 'SearchController@search_religion')->name('search_religion');
    Route::get('/education', 'SearchController@search_education')->name('search_education');
    Route::get('/personal', 'SearchController@search_personal')->name('search_personal');
    Route::get('/profession', 'SearchController@search_profession')->name('search_profession');










