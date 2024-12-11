<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

use App\Http\Controllers\CashRegisterController;

Route::get('/cash-registers', [CashRegisterController::class, 'index']);
Route::post('/cash-registers', [CashRegisterController::class, 'store']);
Route::get('/cash-registers/{cashRegister}', [CashRegisterController::class, 'show']);
Route::put('/cash-registers/{cashRegister}', [CashRegisterController::class, 'update']);
Route::delete('/cash-registers/{cashRegister}', [CashRegisterController::class, 'destroy']);

use App\Http\Controllers\LocationController;

Route::get('/locations', [LocationController::class, 'index']);
Route::post('/locations', [LocationController::class, 'store']);
Route::get('/locations/{location}', [LocationController::class, 'show']);
Route::put('/locations/{location}', [LocationController::class, 'update']);
Route::delete('/locations/{location}', [LocationController::class, 'destroy']);

use App\Http\Controllers\TypeController;

Route::get('/types', [TypeController::class, 'index']);
Route::post('/types', [TypeController::class, 'store']);
Route::get('/types/{type}', [TypeController::class, 'show']);
Route::delete('/types/{type}', [TypeController::class, 'destroy']);

use App\Http\Controllers\TransactionController;

Route::post('/transactions', [TransactionController::class, 'store']);
Route::get('/transactions/{transaction}', [TransactionController::class, 'show']);
Route::put('/transactions/{transaction}', [TransactionController::class, 'update']);
Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy']);
