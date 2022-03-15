<?php

namespace App\ChainOfResponsibilityPattern\Interfaces;

interface Handler
{
    public function setNext(Handler $handler);

    public function handleRequest($request);
}
