<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "homepage"])->name('homepage');
Route::post('/store-student',[HomeController::class, 'store'] )->name('student_store');




