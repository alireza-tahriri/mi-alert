<?php

use AlirezaTahriri\MiAlert\Controllers\MiAlertController;
use AlirezaTahriri\MiAlert\Middleware\MiAlertMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(MiAlertMiddleware::class)->group(function () {

    Route::get('/test', [MiAlertController::class, 'index']);
    Route::get('/message', [MiAlertController::class, 'notification']);
    Route::get('/config', function () {
        return config('mi-alert.app_type');
    });

});