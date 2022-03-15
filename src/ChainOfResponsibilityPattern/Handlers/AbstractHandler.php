<?php

namespace App\ChainOfResponsibilityPattern\Handlers;

use App\ChainOfResponsibilityPattern\Interfaces\Handler;

abstract class AbstractHandler implements Handler
{
    protected $nextHandler;

    public function setNext(Handler $handler)
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    public function handleRequest($request)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handleRequest($request);
        }

        echo "Mail type is undefined. Forward to storage\n";
    }
}
