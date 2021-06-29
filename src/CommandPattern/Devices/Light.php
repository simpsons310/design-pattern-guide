<?php

namespace App\CommandPattern\Devices;

class Light
{
    protected $place = '';

    public function __construct($place)
    {
        $this->place = $place;
    }

    public function on()
    {
        echo $this->place . " light is on\n";
    }

    public function off()
    {
        echo $this->place . " light is off\n";
    }
}
