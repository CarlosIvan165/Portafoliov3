<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/devstagram', function () {
    return view('projects.devstagram');
})->name('devstagram');

Route::get('/ilo', function () {
    return view('projects.ilo');
})->name('ilo');

Route::get('/portafolio1', function () {
    return view('projects.portafolio1');
})->name('portafolio1');


