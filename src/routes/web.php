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

Route::get('/', function () {
    return view('welcome');
});

Route::get('languageTypes', function () {
    return App\LanguageType::all();
});

Route::get('languages', function () {
    return App\Language::all();
});

Route::group(['prefix' => 'api'], function() {
    Route::get('categories', ['as' => 'categories', function () {
        return App\Category::all();
    }]);
});