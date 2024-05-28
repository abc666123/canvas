<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/shows', function () {
    return view('shows');
})->name('shows');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/habib', function () {
    return view('habib');
})->name('habib');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/arifur', function () {
    return view('arifur');
})->name('arifur');

Route::get('/nazmul', function () {
    return view('nazmul');
})->name('nazmul');

Route::get('/khalekuzzaman', function () {
    return view('khalekuzzaman');
})->name('khalekuzzaman');


Route::get('/ankhi', function () {
    return view('ankhi');
})->name('ankhi');



Route::get('/farhat', function () {
    return view('farhat');
})->name('farhat');

Route::get('/yaminhassanmahdi', function () {
    return view('yaminhassanmahdi');
})->name('yaminhassanmahdi');

Route::get('/canvasdigital', function () {
    return view('canvasdigital');
})->name('canvasdigital');

Route::get('/f2f', function () {
    return view('f2f');
})->name('f2f');

Route::get('/mib', function () {
    return view('mib');
})->name('mib');
Route::get('/canvasofbusiness', function () {
    return view('canvasofbusiness');
})->name('canvasofbusiness');

Route::get('/saif', function () {
    return view('saif');
})->name('saif');

Route::get('/shafin', function () {
    return view('shafin');
})->name('shafin');
Route::get('/najrana', function () {
    return view('najrana');
})->name('najrana');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/concerns', function () {
    return view('shows');
})->name('concerns');
Route::get('/aziz', function () {
    return view('aziz');
})->name('aziz');
Route::get('/al-amin', function () {
    return view('al-amin');
})->name('al-amin');
Route::get('/abed', function () {
    return view('abed');
})->name('abed');
