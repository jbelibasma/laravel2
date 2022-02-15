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

Route::get('/', 'testController@home');
Route::get('/libre','testController@index')->name('autre'); // route simple
Route::get('/libre','testController@index')->name('autre'); // route avec un nom
Route::get('/libre/{id}','testController@indexParameter'); // route avec un parametre
Route::get('/libre/{name}/{id}','testController@indexParameter')->name('parametre'); // route avec un parametre et un nom

route::get('/form','formController@getFieldName');
route::post('/formSubmit','formController@submitFieldName');

Route::get('/admin', function () {

 return view('admin.adminDashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
