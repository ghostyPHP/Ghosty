<?php

namespace App\Controllers;

use Ghosty\Framework\Support\Facades\Request;

class TestController
{
    public function show()
    {
        return Request::route('id', '0');
    }
}
