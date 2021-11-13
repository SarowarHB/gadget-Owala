<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\UserController;
 use App\Http\Controllers\backend\AdminDeshboardController;


Route::get('/', function () {
    return view('frontEnd.body.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('frontEnd.body.index');
})->name('/');

Route::get('/user/register',[UserController::class,'UserRegistration'])->name('user.register');
Route::post('/new/register',[UserController::class,'NewUserRegistration'])->name('new.User.register');


Route::get('/dashboard',[AdminDeshboardController::class,'deshboardView']);