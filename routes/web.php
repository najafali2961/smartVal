<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('sections.contact');
})->name('contact');
Route::get('/blog', function () {
    return view('sections.blog');
})->name('blog');
Route::get('/about', function () {
    return view('sections.about');
})->name('about');
Route::get('/service', function () {
    return view('sections.services');
})->name('services');
