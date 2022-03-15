<?php

namespace App\ChainOfResponsibilityPattern\Handlers;

class FanHandler extends AbstractHandler
{
    public function handleRequest($request)
    {
        if ($request === "Fan") {
            echo "FAN Mail: Forward to CEO\n";
        } else {
            return parent::handleRequest($request);
        }
    }
}
