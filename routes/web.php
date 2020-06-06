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

Route::get('/', function () {
     return view('welcome');
});



Route::get('cause_category', 'CategoryController@category');
Route::get('get_causes_against_category/{id}', 'CategoryController@get_causes_against_category');