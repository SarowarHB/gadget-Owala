<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontEnd.body.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('frontEnd.body.index');
})->name('dashboard');
