<?php
session_start();
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

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::post('/proseslogin', 'ProsesController@login');
Route::get('/proseslogout', 'ProsesController@logout');

if (!empty($_SESSION)){
    Route::get('/admin', 'AdminController@index');
}