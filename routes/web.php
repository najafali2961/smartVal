<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [
            'localize',
            'localizationRedirect',
            'localeSessionRedirect',
            'localeViewPath'
        ]
    ],
    function () {

        Route::get('/', fn() => view('home'))->name('home');
        Route::get('/contact', fn() => view('sections.contact'))->name('contact');
        Route::get('/index', fn() => view('sections.index'))->name('iinndex');
        Route::get('/blog', fn() => view('sections.blog'))->name('blog');
        Route::get('/about', fn() => view('sections.about'))->name('about');
        Route::get('/service', fn() => view('sections.services'))->name('services');
        Route::get('/case-study', fn() => view('sections.cases'))->name('cases');
    }
);
