<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('task.home');
Route::post('/', [TaskController::class, 'store'])->name('task.store');
