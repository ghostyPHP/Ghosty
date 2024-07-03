<?php

namespace App\Controllers;

use Ghosty\Component\HttpFoundation\Contracts\RequestContract;
use Ghosty\Component\HttpFoundation\Contracts\ResponseContract;
use Ghosty\Component\HttpFoundation\Response;

class TestController
{
    public function __construct(private RequestContract $request)
    {
    }

    public function show(): ResponseContract
    {
        return new Response($this->request->getAttributes()->get(':id'));
    }
}
