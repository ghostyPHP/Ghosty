<?php

$app = new Ghosty\Foundation\Application;





$app->singleton(Ghosty\Contracts\Foundation\Http\KernelContract::class, Ghosty\Foundation\Http\Kernel::class);





return $app;
