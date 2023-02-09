<?php

use App\Http\Controllers\post_controller;
use App\Http\Controllers\project_controller;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/projects', [project_controller::class,'getData'])->name('projects');

Route::view('/contact', 'contact')->name('contact');

Route::get('/project/{project}', [post_controller::class,'showProject'])->name('project.show');