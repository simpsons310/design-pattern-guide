<?php

namespace App\FacadePattern\Devices;

use App\FacadePattern\Amplifier;

class DvdPlayer
{
    public function on()
    {
        echo "DVD Player on\n";
    }

    public function off()
    {
        echo "DVD Player off\n";
    }

    public function eject()
    {
        echo "DVD Player eject\n";
    }

    public function pause()
    {
        echo "DVD Player paused\n";
    }

    public function play($movie)
    {
        echo "DVD Player playing " . $movie ."\n";
    }

    public function stop()
    {
        echo "DVD Player stopped\n";
    }

    public function __toString()
    {
        return "Top-O-Line ";
    }
}
