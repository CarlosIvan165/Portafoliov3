<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/devstagram', function () {
    return view('projects.devstagram');
})->name('devstagram');

Route::get('/devjobs', function () {
    return view('projects.devjobs');
})->name('devjobs');

Route::get('/blog', function () {
    return view('projects.blog');
})->name('blog');

Route::get('/portafolio1', function () {
    return view('projects.portafolio1');
})->name('portafolio1');

Route::get('/portafolio2', function () {
    return view('projects.portafolio2');
})->name('portafolio2');

Route::get('/portafolio3', function () {
    return view('projects.portafolio3');
})->name('portafolio3');

Route::get('/ilo', function () {
    return view('projects.ilo');
})->name('ilo');


