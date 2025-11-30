<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
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
        Route::post('/contact', function (Request $request) {

            $request->validate([
                'name'    => 'required',
                'email'   => 'required|email',
                'subject' => 'required',
                'message' => 'required|min:10',
            ]);

            // Send email directly
            Mail::raw("
        New message from: {$request->name}
        Email: {$request->email}
        Subject: {$request->subject}

        Message:
        {$request->message}
    ", function ($message) use ($request) {
                $message->to('contact@smartval.tritec.cloud') // ← your email
                    ->replyTo($request->email, $request->name)
                    ->subject($request->subject ?? 'New Contact Form Message');
            });

            return back()->with('success', __('app.message_sent'));
        });
    }


);
