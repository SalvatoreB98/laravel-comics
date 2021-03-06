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
    $data = config("comics");
    return view('comics',["comicsList" => $data]);

})->name("comics");

Route::get('/Personaggi', function () {
    return view('characters');
})->name("characters");

Route::get('/comic/{index}', function ($index) {
    $data = config("comics");
    $selectedComic = $data[$index];
    return view('comic',["comic" => $selectedComic]);
})->name("comic");