<?php

namespace App\FacadePattern\Devices;

class TheaterLight
{
    public function on()
    {
        echo "Theater light on\n";
    }

    public function off()
    {
        echo "Theater light off\n";
    }

    public function dim($dim)
    {
        echo "Theater light dimming to " . $dim . "%\n";
    }
}
