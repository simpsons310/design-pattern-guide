<?php

namespace App\CommandPattern\Devices;

class CeilingLight
{
    const OFF = 0;
    const ON = 1;
    const DIM = 2;

    protected $mode;

    protected $place = '';

    public function __construct($place)
    {
        $this->place = $place;
    }

    public function on()
    {
        echo $this->place . " ceiling light is on\n";
    }

    public function off()
    {
        echo $this->place . " ceiling light is off\n";
    }

    public function dim()
    {
        echo $this->place . " ceiling light is dim\n";
    }

    public function getMode()
    {
        return $this->mode;
    }
}
