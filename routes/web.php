<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;

Route::get('/', [EmpController::class, 'viewForm'])->name('home');
Route::post('/add_cuscomp',[EmpController::class,'addcuscomp']);
Route::get('/upd_cusfrm',[EmpController::class,'UpdateForm'])->name('upd_cusfrm');
Route::post('/form_submit',[EmpController::class,'getCus'])->name('frm_submit');
Route::put('/Update_submit',[EmpController::class,'updateCus'])->name('upd_submit');
Route::put('/delete_submit',[EmpController::class,'deleteCus'])->name('del_submit');
