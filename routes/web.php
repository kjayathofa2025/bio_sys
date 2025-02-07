<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;

Route::get('/', [EmpController::class, 'viewForm'])->name('home');
Route::post('/add-cuscomp',[EmpController::class,'addcuscomp']);
