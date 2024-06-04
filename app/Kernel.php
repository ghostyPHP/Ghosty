<?php

namespace App;

use App\Providers\ServiceProvider;
use Ghosty\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected array $serviceProviders = [
        ServiceProvider::class
    ];
}
