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
Route::view('/schedules', 'pages.schedules');
Route::view('/create', 'pages.job-create');

Route::view('/jobpost', 'job-posting');
Route::view('/about', 'about');
Route::view('/a', 'job-details');
Route::view('/app', 'appform');

Route::view('/tae', 's');
Route::view('/tae/taes', 's');
