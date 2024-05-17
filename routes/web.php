<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswersController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::post('/contact',[PageController::class,'submitContact'])->name('contact');

Route::resource('questions', QuestionController::class);
Route::resource('answers', AnswersController::class)->except(['except' => 'create', 'index', 'show']);
