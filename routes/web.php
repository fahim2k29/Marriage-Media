<?php

use Illuminate\Support\Facades\Route;

// Backend Routes

require_once __DIR__ . '/backend/authentication.php';

Route::group(['prefix' => 'sadmin', 'middleware' => ['auth:admin', 'admin'], 'namespace' => 'Backend'], function () {
    // Dashboard
    require_once __DIR__ . '/backend/dashboard.php';

    // Site Config
    require_once __DIR__ . '/backend/site_config.php';

    // Product
    require_once __DIR__ . '/backend/product.php';

    // Customer
    require_once __DIR__ . '/backend/customer.php';

    // Order
    require_once __DIR__ . '/backend/order.php';

    // Purchase
    require_once __DIR__ . '/backend/purchase.php';
});

 
// Route::get('/welcome/{id}', function () {
//     return view('welcome');
// });

Auth::routes();

    Route::get('/welcome/{id}', 'HomeController@welcome')->name('welcome');
    

    
    // Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', 'HomeController@index')->name('home')->middleware('verified');

    Route::get('/user/dashboard', 'HomeController@user_dashboard')->name('user_dashboard');
    Route::get('/user/dashboard/profile', 'HomeController@user_dashboard_profile')->name('user_dashboard_profile');
    Route::post('/signup/create_one', 'HomeController@register_create_one')->name('register_create_one');
    
    //...!...profile update//
    Route::post('/profile_update/aboutme', 'HomeController@aboutme_update')->name('aboutme_update');
    Route::post('/profile_update/education', 'HomeController@education_update')->name('education_update');
    Route::post('/profile_update/personal', 'HomeController@personal_update')->name('personal_update');
    Route::post('/profile_update/religion', 'HomeController@religion_update')->name('religion_update');
    Route::post('/profile_update/personalInfo', 'HomeController@personalInfo_update')->name('personalInfo_update');
    
    Route::get('/changePassword', 'HomeController@changePassword')->name('changePassword');
    Route::post('/changePassword/store', 'HomeController@changePassword_store')->name('changePassword_store');
    Route::get('/editPhoto', 'HomeController@editPhoto')->name('editPhoto');
    Route::get('/editPersonalInfo', 'HomeController@editPersonalInfo')->name('editPersonalInfo');
    Route::get('/changeUsername', 'HomeController@changeUsername')->name('changeUsername');
    Route::post('/changeUsername/store', 'HomeController@changeUsername_store')->name('changeUsername_store');
    Route::get('/changeEmail', 'HomeController@changeEmail')->name('changeEmail');
    Route::post('/changeEmail/store', 'HomeController@changeEmail_store')->name('changeEmail_store');
    Route::get('/membership/packages', 'HomeController@packages')->name('packages');
    Route::get('/showInfo/{id}', 'HomeController@showInfo')->name('showInfo');


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
    Route::get('/search/result', 'SearchController@search_result')->name('search_result');
    Route::get('/search/users', 'SearchController@search_users')->name('search_users');


Route::get('/pages/news/Umrah-Winners/{id}', 'FooterController@Umrah_Winners')->name('Umrah_Winners');

Route::get('/success_story', 'SuccessStoryController@successStory')->name('successStory');
Route::get('/success_story/{id}', 'SuccessStoryController@successStory_show')->name('successStory_show');












