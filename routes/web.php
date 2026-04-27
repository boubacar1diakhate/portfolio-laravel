<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/projet/{slug}', [PortfolioController::class, 'show'])->name('project.show');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('contact.send');