<?php

use Ghosty\Container\Facades\Container;


define('APP_PATH', dirname(__DIR__));





require_once __DIR__ . '/../vendor/autoload.php';





Container::singleton(Ghosty\Framework\Contracts\KernelContract::class, Ghosty\Framework\Kernel::class);





Container::make(Ghosty\Framework\Application::class)
    ->createResponse()
    ->sendResponse();
