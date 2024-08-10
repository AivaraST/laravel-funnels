<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('funnel1.landing');
});
Route::get('/1/quiz', function () {
    return view('funnel1.quiz');
});
