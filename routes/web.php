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

Route::get('/', function () { return view('homepage'); });

Route::post('/', 'SuperHeroController@post')->name('name_post');

Route::post('/team', 'TeamController@insert')->name('insert_hero');

Route::post('/team/hero', 'TeamController@delete')->name('delete_hero');

Route::get('/team', 'TeamController@index')->name('get_team');
