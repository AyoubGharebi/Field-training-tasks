<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\empController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('employees', [empController::class ,'index'])->name('employees');
Route::get('employees/create',[empController::class,'create']);
Route::post('newemp', [empController::class ,'store']);

Route::get('delete/{id}', [empController::class ,'destroy']);

Route::get('edit/{id}', [empController::class ,'edit']);

Route::get('show/{id}', [empController::class ,'show']);

Route::post('edit/{id}', [empController::class ,'update']);