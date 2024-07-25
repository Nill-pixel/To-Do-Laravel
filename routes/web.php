<?php

use App\Http\Controllers\PasswordController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TaskController::class, 'index'])->name('task.home');

Route::post('/', [TaskController::class, 'store'])->name('task.store');

Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/{task}/update', [TaskController::class, 'update'])->name('task.update');
Route::patch('/{task}/completed', [TaskController::class, 'complete'])->name('task.complete');
Route::delete('/{task}/destroy', [TaskController::class, 'destroy'])->name('task.destroy');
// Password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');