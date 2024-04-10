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
    $socials = config("db.socials");

    return view('home', compact('navs', 'series', 'medias', 'links', 'socials'));

})->name('home');;

Route::get('/single', function () {
    $navs = config("db.navs");

    $series = config("db.series");
    $singleserie = $series[0];

    $medias = config("db.medias");
    $links = config("db.links");
    $socials = config("db.socials");

    return view('single', compact('navs', 'links', 'socials', 'singleserie', 'medias'));

})->name('single');;
