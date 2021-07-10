<?php

namespace App\FacadePattern\Devices;

use App\FacadePattern\DvdPlayer;

class Projector
{
    public function on()
    {
        echo "Projector on\n";
    }

    public function off()
    {
        echo "Projector on\n";
    }

    public function tvMode()
    {
        echo "Projector in TV mode\n";
    }

    public function wideScreenMode()
    {
        echo "Projector in widescreen mode\n";
    }

    public function __toString()
    {
        return "Top-O-Line ";
    }
}
