<?php

namespace App\CommandPattern\Devices;

class CeilingFan
{
    const OFF = 0;
    const HIGH = 1;
    const MEDIUM = 2;
    const LOW = 3;

    protected $place = '';

    protected $speed;

    public function __construct($place)
    {
        $this->place = $place;
    }

    public function high()
    {
        $this->speed = self::HIGH;
        echo $this->place . ' ceiling fan is on high';
    }

    public function medium()
    {
        $this->speed = self::MEDIUM;
        echo $this->place . " ceiling fan is on medium\n";
    }

    public function low()
    {
        $this->speed = self::LOW;
        echo $this->place . " ceiling fan is on low\n";
    }

    public function off()
    {
        $this->speed = self::OFF;
        echo $this->place . " ceiling fan is off\n";
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}
