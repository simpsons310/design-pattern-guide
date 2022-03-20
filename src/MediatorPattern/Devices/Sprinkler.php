<?php

namespace App\MediatorPattern\Devices;

class Sprinkler extends Device
{
    public function turnOff()
    {
        echo "Sprinkler is turned off\n";
        $this->mediator->onEvent('sprinkler-off');
    }
}
