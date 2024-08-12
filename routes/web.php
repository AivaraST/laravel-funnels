<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([], 200);
});

Route::get('/1', function () {
    return view('funnel1.landing');
});

Route::get('/1/quiz', function () {
    return view('funnel1.quiz');
});

Route::get('/1/summary', function () {
    return view('funnel1.summary');
});

Route::get('/1/email', function () {
    return view('funnel1.email');
});

Route::get('/1/checkout', function () {
    return view('funnel1.payments.checkout');
});

Route::get('/1/password', function () {
    return view('funnel1.password');
});

Route::get('/1/upsells/workouts', function () {
    return view('funnel1.payments.upsells.workouts');
});
