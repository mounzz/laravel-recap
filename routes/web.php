<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('pages.about');
}) -> name("about");

Route::get('/contact', function () {
    return view('pages.contact');
}) -> name("contact");

Route::get('/info', function () {
    return view('pages.info');
}) -> name("info");
