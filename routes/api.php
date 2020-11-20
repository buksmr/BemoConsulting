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

header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token, x_csrftoken');

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::post('register', 'API\APILoginController@register');

Route::group(['prefix' => 'v1'], function () {
	Route::post('login', 'API\LoginController@login')->name('fail');
	Route::get('fail', 'API\LoginController@fail')->name('fail');
	

});

Route::group(['middleware' => 'auth:api', 'prefix' => 'v1'], function () {

	Route::apiResource('Contact', 'API\ContactController');





});
