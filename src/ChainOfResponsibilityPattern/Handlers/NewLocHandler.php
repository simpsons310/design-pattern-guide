<?php

namespace App\ChainOfResponsibilityPattern\Handlers;

class NewLocHandler extends AbstractHandler
{
    public function handleRequest($request)
    {
        if ($request === "New Location") {
            echo "Request New Location Mail: Forward to business development\n";
        } else {
            return parent::handleRequest($request);
        }
    }
}
