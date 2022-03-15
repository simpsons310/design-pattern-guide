<?php

namespace App\ChainOfResponsibilityPattern\Handlers;

class SpamHandler extends AbstractHandler
{
    public function handleRequest($request)
    {
        if ($request === "Spam") {
            echo "SPAM Mail: Deleted spam mail\n";
        } else {
            return parent::handleRequest($request);
        }
    }
}
