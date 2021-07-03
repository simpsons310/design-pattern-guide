<?php

namespace App\FacadePattern\Devices;

use App\FacadePattern\Amplifier;

class Tuner
{
    public function on()
    {
        echo "Tuner on\n";
    }

    public function off()
    {
        echo "Tuner of\n";
    }

    public function setAm()
    {
        echo "Tuner setting to Am\n";
    }

    public function setFm()
    {
        echo "Tuner setting to Fm\n";
    }

    public function setFrequency($frequency)
    {
        echo "Tuner setting frequency to " . $frequency . "\n";
    }

    public function __toString()
    {
        return "Top-O-Line ";
    }
}
