<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/{param}', [MahasiswaController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']);


// FORM QUESTION
Route::get('/question', [QuestionController::class, 'index'])
    ->name('question.index');

Route::post('/question/store', [QuestionController::class, 'store'])
    ->name('question.store');