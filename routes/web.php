<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/term', [App\Http\Controllers\TermController::class, 'index'])->name('term');
Route::get('/privacy', [App\Http\Controllers\PrivacyController::class, 'index'])->name('privacy');
Route::get('/why-millet', [App\Http\Controllers\WhyMilletController::class, 'index'])->name('why_millet');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');