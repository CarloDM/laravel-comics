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
$cards = config('dc-comics');
$menu = config('menu.main-menu');

Route::get('/', function () {

    $cards = config('dc-comics');
    $menu = config('menu.main-menu');
    return view('home', compact('cards'));
})->name('home');

Route::get('/chi-siamo', function () {
    // metodo config per accedere a miei file in cartella config
    // dump(config('dc-comics'));
    $cards = config('dc-comics');
    $menu = config('menu.main-menu');
    return view('about', compact('cards'));
})->name('about');

Route::get('/comics', function () {
    return view('home');
})->name('comics');
Route::get('/moves', function () {
    return view('home');
})->name('moves');
Route::get('/tv', function () {
    return view('home');
})->name('tv');
Route::get('/games', function () {
    return view('home');
})->name('games');
Route::get('/collectibles', function () {
    return view('home');
})->name('collectibles');
Route::get('/videos', function () {
    return view('home');
})->name('videos');
Route::get('/fans', function () {
    return view('home');
})->name('fans');
Route::get('/news', function () {
    return view('home');
})->name('news');
Route::get('/characters', function () {
    return view('home');
})->name('characters');
Route::get('/shop', function () {
    return view('home');
})->name('shop');
