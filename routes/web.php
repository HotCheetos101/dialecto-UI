<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('layouts.layout');
});

Route::get('/login', function () {
    return view('auth.homepage');
});

Route::get('/home-user', function () {
    return view('user.learner.homepage');
});
