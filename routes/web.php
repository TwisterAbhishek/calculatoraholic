<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\EMICalculatorController;
use App\Http\Controllers\WordPressSQLController;
use App\Http\Controllers\MarksUnitController;
use App\Http\Controllers\LandUnitController;
use App\Http\Controllers\TypingTestController;
use App\Http\Controllers\BmiController;


Route::prefix('/')->group(function () {
    Route::get('/', [FrontController::class, 'home']);
    Route::get('/privacy-policy', [FrontController::class, 'privacy'])->name('privacy');
    Route::get('/terms-and-conditions', [FrontController::class, 'terms'])->name('terms');

    Route::prefix('/tools')->group(function () {

        Route::get('/', [FrontController::class, 'tools'])->name('tools');

        Route::prefix('/emi-calculator')->group(function () {
            Route::get('/', [EMICalculatorController::class, 'index'])->name('emicalculator');
            Route::post('/calculate', [EMICalculatorController::class, 'calculate'])->name('emicalculate');
        });

        Route::prefix('/sql-queries-to-change-wordpress-website-domain')->group(function () {
            Route::get('/', [WordPressSQLController::class, 'index'])->name('wptosql');
            Route::post('/calculate', [WordPressSQLController::class, 'calculate'])->name('wpsqlcalculate');
        });

        Route::get('/cgpa-to-percentage-calculator', [MarksUnitController::class, 'cgpatopercentage'])->name('cgpatopercentage');
        Route::get('/percentage-to-cgpa-calculator', [MarksUnitController::class, 'percentagetocgpa'])->name('percentagetocgpa');

        Route::get('/land-unit-calculator', [LandUnitController::class, 'landunit'])->name('landunit');

        Route::get('/typing-speed-test', [TypingTestController::class, 'typingtest'])->name('typingtest');

        Route::get('/bmi-calculator', [BmiController::class, 'bmi'])->name('bmi');

        
    });

});