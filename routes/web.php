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

Route::get('/comics', function () {
  $comics = config('comicsdb');

  return view('comics', compact('comics'));
})->name('comics');

Route::get('/detail/{index}', function ($index) {
  $comics = config('comicsdb');
	
	$comic = $comics[$index];

  return view('detail', compact('comic'));
})->name('detail');

