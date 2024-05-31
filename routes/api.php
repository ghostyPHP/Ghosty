<?php

use App\Controllers\TestController;
use Ghosty\Support\Facades\Route;

Route::get('profile/{id}')->controller(TestController::class)->action('show');
