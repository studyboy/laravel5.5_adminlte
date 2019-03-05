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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'AngularController@serveApp');
Route::get('/unsupported-browser', 'AngularController@unsupported');
Route::get('user/verify/{verificationCode}', ['uses' => 'Auth\AuthController@verifyUserEmail']);
Route::get('auth/{provider}', ['uses' => 'Auth\AuthController@redirectToProvider']);
Route::get('auth/{provider}/callback', ['uses' => 'Auth\AuthController@handleProviderCallback']);
Route::get('/api/authenticate/user', 'Auth\AuthController@getAuthenticatedUser');

// $api->group(['middleware' => ['api']], function ($api) {
//     $api->controller('auth', 'Auth\AuthController');

//     // Password Reset Routes...
//     $api->post('auth/password/email', 'Auth\PasswordResetController@sendResetLinkEmail');
//     $api->get('auth/password/verify', 'Auth\PasswordResetController@verify');
//     $api->post('auth/password/reset', 'Auth\PasswordResetController@reset');
// });

// $api->group(['middleware' => ['api', 'api.auth']], function ($api) {
//     $api->get('users/me', 'UserController@getMe');
//     $api->put('users/me', 'UserController@putMe');
// });

// $api->group(['middleware' => ['api', 'api.auth', 'role:admin.super|admin.user']], function ($api) {
//     $api->controller('users', 'UserController');
// });
