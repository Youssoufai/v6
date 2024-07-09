<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/service', 'service')->name('service');
Route::view('/project', 'project')->name('project');
Route::view('/podcast', 'podcast.podcast')->name('podcast');
