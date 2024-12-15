<?php

use App\Http\Controllers\Applicant;
use App\Http\Controllers\JobCreate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::view('/lologin', 'login')->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::middleware('auth')->group(function() {

    Route::view('/dashboard', 'dashboard');
    Route::view('/priority-applicant', 'pages.priority-applicants');
    Route::view('/applicants', 'pages.applicant-list');
    Route::view('/schedules', 'pages.schedules');
    Route::view('/create', 'pages.job-create');
    Route::view('/r', 'pages.job-result');

    Route::get('/r/{job}',[JobCreate::class, 'show']);
    
});



Route::view('/', 'job-posting');
Route::view('/about', 'about');
Route::view('/a', 'job-details');
Route::get('/a/{job}',[Applicant::class, 'show']);


Route::view('/tae', 's');
Route::view('/tae/taes', 's');
