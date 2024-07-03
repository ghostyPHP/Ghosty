<?php


use Ghosty\Framework\Support\Facades\Route;

Route::get('/user/:id')
    ->parameters([':id'])
    ->controller(\App\Controllers\TestController::class)
    ->action('show');
