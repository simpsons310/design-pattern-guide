<?php

namespace App\MediatorPattern\Devices;

abstract class Device
{
    protected $mediator;

    public function __construct($mediator = null)
    {
        $this->mediator = $mediator;
    }

    public function setMediator($mediator)
    {
        $this->mediator = $mediator;
    }
}
