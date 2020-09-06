<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });




// Route::post('create_payment', function(){
    

// Route::post('execute_payment', function(Request $request){
   

Route::post('PaymentPaypalController@create_payment')->name('create_payment');
Route::post('PaymentPaypalController@execute_payment')->name('execute_payment');

