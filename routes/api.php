<?php

use App\Controllers\TestController;
use App\Middlewares\TestMiddleware;
use Ghosty\Framework\Support\Facades\Route;

Route::get('profile/{id}')->controller(TestController::class)->action('show')->middleware(TestMiddleware::class)->getRoutes();
