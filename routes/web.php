<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Mail;



Route::get('/', [TaskController::class, 'index'])->name('task.home');

Route::post('/', [TaskController::class, 'store'])->name('task.store');

Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/{task}/update', [TaskController::class, 'update'])->name('task.update');
Route::patch('/{task}/completed', [TaskController::class, 'complete'])->name('task.complete');
Route::delete('/{task}/destroy', [TaskController::class, 'destroy'])->name('task.destroy');
// Password
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('dashboard', function () {
  return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('test-email', function () {
  Mail::raw('Test email body', function ($message) {
    $message->to('tiagonilvany@gmail.com')
      ->subject('Test Email');
  });

  return 'Test email sent!';
});
