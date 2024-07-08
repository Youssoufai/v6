<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about', 'about')->name('about');
Route::view('/service', 'service')->name('service');
Route::view('/project', 'project')->name('project');
