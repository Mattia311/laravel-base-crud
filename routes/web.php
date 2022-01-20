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
    return view('home');
})->name('home');

Route::get('comics', 'ComicController@index')->name('comics');

Route::get('comics/{comic}', 'ComicController@show')->name('comic');




Route::get('/comics/index', 'ComicController@index')->name('comics.index');

Route::get('/comics/create', 'ComicController@create')->name('comics.create');

Route::post('/comics', 'ComicController@store')->name('comics.store');

Route::get('/comics/show/{comic}', 'ComicController@show')->name('comics.show');

Route::get('/comics/edit/{comic}', 'ComicController@edit')->name('comics.edit');

Route::put('/comics/update/{comic}', 'ComicController@update')->name('comics.update');

Route::delete('/comics/{comic}', 'ComicController@destroy')->name('comics.destroy');




Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
