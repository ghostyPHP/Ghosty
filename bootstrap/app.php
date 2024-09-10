<?php

use Ghosty\Framework\Foundation\ApplicationFactory;

return (new ApplicationFactory(dirname(__DIR__)))
    ->withRoutes('/routes/api.php')
    ->create();
