<?php

namespace App\ChainOfResponsibilityPattern\Handlers;

class ComplaintHandler extends AbstractHandler
{
    public function handleRequest($request)
    {
        if ($request === "Complaint") {
            echo "COMPLAINT Mail: Forward to legal department\n";
        } else {
            return parent::handleRequest($request);
        }
    }
}
