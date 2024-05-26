<?php

require __DIR__ . '/../vendor/autoload.php';





$app = require_once __DIR__ . '/../bootstrap/app.php';





$app->make(Ghosty\Contracts\Foundation\Http\KernelContract::class);
