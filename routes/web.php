<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroceriesController;
use App\Http\Controllers\HouseHoldsController;
use App\Http\Controllers\MagicLinkController;
use App\Http\Controllers\MedicinesController;
use App\Http\Controllers\PassPhraseController;
use App\Http\Controllers\PersonalCaresController;
use App\Http\Controllers\UserItemsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('login')
    ->name('login.')
    ->group(function () {
    Route::get('confirm', [PassPhraseController::class, 'show'])->name('confirm');
    Route::post('confirm', [PassPhraseController::class, 'store'])->name('confirmation');
    Route::get('magic/{user}', [MagicLinkController::class, 'confirm'])->name('magiclink');
});

Route::middleware(['auth:sanctum', 'verified'])
    ->group(function (){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('groceries')->name('groceries.')->group(function () {
        Route::get('/create', [GroceriesController::class, 'create'])->name('create');
        Route::post('/store', [GroceriesController::class, 'store'])->name('store');
    });

    Route::prefix('households')->name('households.')->group(function () {
        Route::get('/create', [HouseHoldsController::class, 'create'])->name('create');
    });

    Route::prefix('personalcare')->name('personalcare.')->group(function () {
        Route::get('/create', [PersonalCaresController::class, 'create'])->name('create');
    });

    Route::prefix('medicines')->name('medicines.')->group(function () {
        Route::get('/create', [MedicinesController::class, 'create'])->name('create');
    });

    Route::prefix('items')->name('items.')->group(function () {
        Route::get('/', [UserItemsController::class, 'index'])->name('index');
        Route::post('/', [UserItemsController::class, 'update'])->name('update');
    });
});