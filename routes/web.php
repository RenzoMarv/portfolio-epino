<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home']);
Route::get('/autobiography', [PortfolioController::class, 'autobiography']);
Route::get('/article', [PortfolioController::class, 'article']);
Route::get('/blog', [PortfolioController::class, 'blog']);
Route::get('/form', [PortfolioController::class, 'form']);
