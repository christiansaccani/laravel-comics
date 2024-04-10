<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $navs = config("db.navs");
    $series = config("db.series");
    $medias = config("db.medias");
    $links = config("db.links");

    return view('home', compact('navs', 'series', 'medias', 'links'));

})->name('home');;
