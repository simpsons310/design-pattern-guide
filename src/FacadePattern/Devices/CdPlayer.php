<?php

namespace App\FacadePattern\Devices;

use App\FacadePattern\Amplifier;

class CdPlayer
{
    public function on()
    {
        echo "CD Player on\n";
    }

    public function off()
    {
        echo "CD Player off\n";
    }

    public function eject()
    {
        echo "CD Player eject\n";
    }

    public function pause()
    {
        echo "CD Player paused\n";
    }

    public function play($movie)
    {
        echo "CD Player playing " . $movie . "\n";
    }

    public function stop()
    {
        echo "CD Player playing\n";
    }

    public function __toString()
    {
        return "Top-O-Line ";
    }
}
