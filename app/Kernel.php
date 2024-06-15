<?php

namespace App;

use Ghosty\Framework\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected array $serviceProviders = [

        /**
         * Ghosty Service Providers
         */
        \Ghosty\Framework\Database\DatabaseServiceProvider::class,




        /**
         * App Service Providers
         */

        \App\Providers\ServiceProvider::class
    ];
}
