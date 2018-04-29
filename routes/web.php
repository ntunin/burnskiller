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

use  App\Models\User as User;
use Illuminate\Support\Facades\Redirect as Redirect;

Route::get('/', 'MainController@open');

Route::get('login', [ 'as' => 'login', 'uses' => function () {
    return View::make('pages.login');
}]);

Route::get('sign-up', [ 'as' => 'sign-up', 'uses' => function () {
    return View::make('pages.register');
}]);

