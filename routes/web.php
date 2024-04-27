<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::post('/contact',[PageController::class,'submitContact'])->name('contact');

Route::resource('questions','QuestionController');
