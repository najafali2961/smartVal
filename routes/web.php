<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('sections.contact');
})->name('contact');
Route::get('/index', function () {
    return view('sections.index');
})->name('iinndex');

Route::get('/blog', function () {
    return view('sections.blog');
})->name('blog');

Route::get('/about', function () {
    return view('sections.about');
})->name('about');

Route::get('/service', function () {
    return view('sections.services');
})->name('services');

Route::get('/case-study', function () {
    return view('sections.cases');
})->name('cases');
