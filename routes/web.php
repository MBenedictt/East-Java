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
    $title = 'Homepage';
    return view('homepage.main', compact('title'));
})->name('home');

Route::get('/discover', function () {
    $title = 'Discover';
    return view('aboutpage.main', compact('title'));
})->name('discover');

Route::get('/tour1', function () {
    $title = 'BSI Tour';
    return view('tourpage.tour1', compact('title'));
})->name('tour1');

Route::get('/tour2', function () {
    $title = 'JB Tour';
    return view('tourpage.tour2', compact('title'));
})->name('tour2');

Route::get('/tour3', function () {
    $title = 'BM Tour';
    return view('tourpage.tour3', compact('title'));
})->name('tour3');
