<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\UserController;


Route::get('/', function () {
    return view('frontEnd.body.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('frontEnd.body.index');
})->name('dashboard');

Route::get('/user/register',[UserController::class,'UserRegistration'])->name('user.register');
Route::post('/new/register',[UserController::class,'NewUserRegistration'])->name('new.User.register');
