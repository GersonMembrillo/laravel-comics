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
    $data = [
        'navbar' => config('db.navbar'),
        'footerComics' => config('db.footerComics'),
        'footerShop' => config('db.footerShop'),
        'footerDC' => config('db.footerDC'),
        'footerSites' => config('db.footerSites'),
        'mainButtons' => config('db.mainButtons'),
        'mainCards' => config('db.mainCards'),
    ];
    return view('home', $data);
})->name('home');

Route::get('/comics', function () {
    $data = [];
    return view('comics.index', $data);
})->name('comics.index');
