<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('task.home');
Route::post('/', [TaskController::class, 'store'])->name('task.store');
Route::get('/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/{task}', [TaskController::class, 'update'])->name('task.update');
Route::patch('/{task}', [TaskController::class, 'complete'])->name('task.complete');
