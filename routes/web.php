<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ContactController;

Route::get('/login', [LoginController::class,'showLoginForm'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/admin', [LoginController::class, 'index'])->name('admin.index');
Route::get('/account', [LoginController::class, 'showAccountList'])->name('admin.account');

Route::get('/signup', [SignupController::class, 'index'])->name('signup.index');
Route::post('/signup/confirm', [SignupController::class, 'confirm'])->name('signup.confirm');
Route::post('/signup/send', [SignupController::class, 'send'])->name('signup.send');

Route::get('/edit/{id}', [EditController::class, 'index'])->name('edit.index');
Route::post('/edit/confirm', [EditController::class, 'confirm'])->name('edit.confirm');
Route::post('/edit/send', [EditController::class, 'send'])->name('edit.send');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/contact/update', [ContactController::class, 'update'])->name('contact.update');
Route::get('/contact/user', [ContactController::class, 'user'])->name('contact.user');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');