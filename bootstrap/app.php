<?php

use Ghosty\Container\Container;





$container = Container::getInstance();





$container->singleton(Ghosty\Framework\Contracts\Foundation\Http\KernelContract::class, App\Kernel::class);





return $container;
