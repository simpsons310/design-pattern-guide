<?php

namespace App\MediatorPattern\Devices;

class CoffeePot extends Device
{
    public function start()
    {
        echo "Coffee pot started!\n";
        $this->mediator->onEvent('coffee-start');
    }

    public function turnOff()
    {
        echo "Coffee pot is turned off!\n";
        $this->mediator->onEvent('coffee-off');
    }
}
