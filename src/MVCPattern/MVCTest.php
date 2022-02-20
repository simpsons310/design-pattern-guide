<?php

namespace App\MVCPattern;

use App\MVCPattern\Core\Request;

class MVCTest
{
    public function __construct()
    {
        $app = new Application();
        $request = new Request();
        $app->handleRequest($request);
    }
}
