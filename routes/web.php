<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoveController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'welcome'])->name('welcome');

// Moves
    // Category
    Route::get('/categories/{category}', [FrontController::class, 'showCategory'])->name('category.show');
    // Show
    Route::get('/moves', [MoveController::class, 'showAllMoves'])->name('movements.show');
    // Create
    Route::get('/new/movement', [MoveController::class, 'createMovement'])->middleware('auth')
    ->name('movements.create');
    // Detail
    Route::get('/movements/detail/{title}', [MoveController::class, 'detail'])->name('movements.detail');

// User
Route::get('/profile', [Controller::class, 'profile'])->middleware('auth')
    ->name('profile');

// Search
Route::get('/search', [FrontController::class, 'search'])->name('search');

// Revisor Home
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');
    // Accept Move
    Route::patch('/accept/move/{move}', [RevisorController::class, 'acceptMove'])->name('revisor.accept_move');
    // Reject Move
    Route::patch('/reject/move/{move}', [RevisorController::class, 'rejectMove'])->name('revisor.reject_move');
