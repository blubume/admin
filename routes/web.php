<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

$admin_link = "adminner520178";
Route::get('/update_lang', 'HomeController@updateLang');
Route::get('/', 'HomeController@landing');
Route::get('/'.$admin_link."/{name}", 'AngularController@serveApp');
Route::get('/'.$admin_link."/", 'AngularController@serveApp');

Route::get('/unsupported-browser', 'AngularController@unsupported');
