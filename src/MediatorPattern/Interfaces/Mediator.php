<?php

namespace App\MediatorPattern\Interfaces;

interface Mediator
{
    public function onEvent(string $event);
}
