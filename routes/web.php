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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// artist
Route::get('/artist', 'ArtistController@index');
Route::get('/artist/create', 'ArtistController@create');
Route::post('/artist', 'ArtistController@store');
Route::get('artist/{artist}/edit','ArtistController@edit');
Route::patch('/artist/{artist}', 'ArtistController@update');
Route::delete('/artist/{artist}', 'ArtistController@destroy');

// album
Route::get('/album', 'AlbumController@index');
Route::get('/album/create', 'AlbumController@create');
Route::post('/album', 'AlbumController@store');
Route::get('album/{album}/edit','AlbumController@edit');
Route::patch('/album/{album}', 'AlbumController@update');
Route::delete('/album/{album}', 'AlbumController@destroy');

// track
Route::get('/track', 'TrackController@index');
Route::get('/track/create', 'TrackController@create');
Route::post('/track', 'TrackController@store');
Route::get('/track/{track}/edit','TrackController@edit');
Route::patch('/track/{track}', 'TrackController@update');
Route::delete('/track/{track}', 'TrackController@destroy');

// played
Route::get('/played', 'PlayedController@index');
Route::get('/played/create', 'PlayedController@create');
Route::post('/played', 'PlayedController@store');
Route::get('/played/{played}/edit','PlayedController@edit');
Route::patch('/played/{played}', 'PlayedController@update');
Route::delete('/played/{played}', 'PlayedController@destroy');