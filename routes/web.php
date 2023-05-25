<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\SigninController@show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/list-student', function () {
    return view('list');
});

Route::get('/add-student','App\Http\Controllers\DetailController@create');

Route::post('/add-student','App\Http\Controllers\DetailController@store');

Route::get('/list-student','App\Http\Controllers\DetailController@show');

Route::get('/list-student/{id}','App\Http\Controllers\DetailController@destroy');

Route::get('/edit/{id}','App\Http\Controllers\DetailController@edit');

Route::post('/update/{id}','App\Http\Controllers\DetailController@update');


Route::post('/','App\Http\Controllers\SigninController@login');
Route::get('/logout', 'App\Http\Controllers\DetailController@logout');

 Route::get('/user', 'App\Http\Controllers\DetailController@user');

Route::post('/user','App\Http\Controllers\DetailController@usercreate');

