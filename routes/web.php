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

    // Member
    require_once __DIR__ . '/backend/member.php';

    // Order
    require_once __DIR__ . '/backend/blog.php';

    // Package
    require_once __DIR__ . '/backend/package.php';

    //Admin_User
    require_once __DIR__ . '/backend/admin.php';

    //Admin_User
    require_once __DIR__ . '/backend/contactUs.php';

});


// Route::get('/welcome/{id}', function () {
//     return view('welcome');
// });

Auth::routes();



    Auth::routes(['verify' => true]);

    Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/', 'HomeController@index')->name('home')->middleware('verified');


Route::get('/signup', 'MainController@register_form_one')->name('register_form_one')->middleware('CheckLoggedin');
Route::post('/signup/create_one', 'HomeController@register_create_one')->name('register_create_one')->middleware('CheckLoggedin');


//...!...profile update//


Route::get('/', 'MainController@index')->name('single')->middleware('CheckLoggedin');

//Route::get('/form', 'MainController@form')->name('form');
Route::get('/search', 'SearchController@index')->name('search_quick');
Route::get('/religion', 'SearchController@search_religion')->name('search_religion');
Route::get('/education', 'SearchController@search_education')->name('search_education');
Route::get('/personal', 'SearchController@search_personal')->name('search_personal');
Route::get('/username', 'SearchController@search_username')->name('search_username');
Route::get('/search/result', 'SearchController@search_result')->name('search_result');

Route::get('/search/result/all', 'SearchController@search_result_all')->name('search_result_all');

Route::get('/contactUs/index', 'Backend\ContactUsController@contactUs')->name('contactUs');


Route::get('/successStory/list','SuccessStoryController@successStory_list')->name('successStory_list');
Route::get('/pages/{id}', 'FooterController@pages')->name('pages');
Route::get('/success_story', 'SuccessStoryController@successStory')->name('successStory');
Route::get('/success_story/{id}', 'SuccessStoryController@successStory_show')->name('successStory_show');
Route::get('/delete/{successStory}','SuccessStoryController@destroy')->name('backend.site_config.successStory.destroy');




Route::group(['middleware' => ['verified']], function () {
Route::group(['middleware' => ['CheckLoggedin']], function () {

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

});

Route::get('change-status', 'HomeController@changeStatus');

Route::get('/welcome/{id}', 'HomeController@welcome')->name('welcome');
Route::get('/make-payment', 'HomeController@make_payment')->name('make_payment');

Route::get('/user/dashboard', 'HomeController@user_dashboard')->name('user_dashboard');

Route::get('/user/dashboard/profile', 'HomeController@user_dashboard_profile')->name('user_dashboard_profile');

Route::post('/profile_update/aboutme', 'HomeController@aboutme_update')->name('aboutme_update');
Route::post('/profile_update/education', 'HomeController@education_update')->name('education_update');
Route::post('/profile_update/personal', 'HomeController@personal_update')->name('personal_update');
Route::post('/profile_update/religion', 'HomeController@religion_update')->name('religion_update');
Route::post('/profile_update/personalInfo', 'HomeController@personalInfo_update')->name('personalInfo_update');

Route::get('/changePassword', 'HomeController@changePassword')->name('changePassword');
Route::post('/changePassword/store', 'HomeController@changePassword_store')->name('changePassword_store');
Route::get('/editPhoto', 'HomeController@editPhoto')->name('editPhoto');

Route::post('/editPhoto/update', 'HomeController@editPhotoUpdate')->name('editPhoto.update');

Route::get('/editPersonalInfo', 'HomeController@editPersonalInfo')->name('editPersonalInfo');
Route::get('/changeUsername', 'HomeController@changeUsername')->name('changeUsername');
Route::post('/changeUsername/store', 'HomeController@changeUsername_store')->name('changeUsername_store');
Route::get('/changeEmail', 'HomeController@changeEmail')->name('changeEmail');
Route::post('/changeEmail/store', 'HomeController@changeEmail_store')->name('changeEmail_store');
Route::get('/membership/packages', 'HomeController@packages')->name('packages');

Route::post('/payment/store', 'HomeController@payment_store')->name('payment_store');
Route::get('/showInfo/{id}', 'HomeController@showInfo')->name('showInfo');
Route::get('/paypal/payment/{id}', 'HomeController@paypal_payment')->name('paypal_payment');

Route::get('/search/users', 'SearchController@search_users')->name('search_users');
Route::get('/search/education/result', 'SearchController@search_education_result')->name('search_education_result');
Route::get('/search/religion/result', 'SearchController@search_religion_result')->name('search_religion_result');
Route::get('/search/personal/result', 'SearchController@search_personal_result')->name('search_personal_result');
Route::get('/search/username/result', 'SearchController@search_username_result')->name('search_username_result');

Route::get('/message/{id}', 'MessageController@message')->name('message');

});





