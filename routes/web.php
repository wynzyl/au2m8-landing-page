<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'site.home')->name('home');
Route::view('/about', 'site.about')->name('about');
Route::view('/projects', 'site.projects')->name('projects');
Route::view('/contact', 'site.contact')->name('contact');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
