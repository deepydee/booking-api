<?php

declare(strict_types=1);

use Booking\Auth\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/v1')
    ->middleware('api')
    ->name('api.v1.')
    ->group(function () {
        Route::post('auth/register', RegisterController::class);
    });
