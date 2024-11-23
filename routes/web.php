<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::view('/priority-applicant', 'pages.priority-applicants');
Route::view('/applicants', 'pages.applicant-list');
