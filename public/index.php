<?php
define('APP_PATH', $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__));





require_once __DIR__ . '/../vendor/autoload.php';





$container = require_once __DIR__ . '/../bootstrap/app.php';





echo $container
    ->make(Ghosty\Framework\Foundation\Application::class)
    ->handle();
