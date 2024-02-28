<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoveController;
use App\Http\Controllers\FrontController;

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

Route::get('/new/movement', [MoveController::class, 'createMovement'])->middleware('auth')
    ->name('movements.create');

// User
Route::get('/profile', [Controller::class, 'profile'])->middleware('auth')
    ->name('profile');


Route::get('/categories/{category}', [FrontController::class, 'showCategory'])->name('category.show');
