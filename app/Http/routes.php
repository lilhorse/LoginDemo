<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1', 'namespace' => 'Api'], function () {

    Route::get('account/captcha', 'LoginController@captcha');
    Route::post('account/register', 'LoginController@register');
    Route::post('account/loginByPwd', 'LoginController@loginByPassword');
    Route::post('account/loginByCaptcha', 'LoginController@loginByCaptcha');
    Route::post('account/loginByOpen', 'LoginController@loginByOpen');
    Route::post('account/forgetPwd', 'LoginController@forgetPassword');
    Route::post('account/updatePwd', 'LoginController@updatePassword')->middleware('auth');

});
