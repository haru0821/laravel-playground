<?php

use App\Http\Controllers\DesignPatternController;
use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// 디자인 패턴
Route::prefix('design-pattern')->group(function () {
    Route::get('/singleton', [DesignPatternController::class, 'singleton']);
    Route::get('/prototype', [DesignPatternController::class, 'prototype']);
    Route::get('/factory-method', [DesignPatternController::class, 'factoryMethod']);
    Route::get('/abstract-factory', [DesignPatternController::class, 'abstractFactory']);
    Route::get('/builder', [DesignPatternController::class, 'builder']);
    Route::get('/adapter', [DesignPatternController::class, 'adapter']);
    Route::get('/proxy', [DesignPatternController::class, 'proxy']);
});

// 레디스
Route::get('/redis', [RedisController::class, 'redis']);