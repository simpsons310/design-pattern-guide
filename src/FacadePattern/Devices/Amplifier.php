<?php

namespace App\FacadePattern\Devices;

use App\FacadePattern\Tuner;
use App\FacadePattern\CdPlayer;
use App\FacadePattern\DvdPlayer;

class Amplifier
{
    public function on()
    {
        echo "Amplifier is on\n";
    }

    public function off()
    {
        echo "Amplifier is off\n";
    }

    public function setCd(string $cd)
    {
        echo "Amplifier setting CD to ". $cd . " CD Player\n";
    }

    public function setDvd(string $dvd)
    {
        echo "Amplifier setting CD to ". $dvd . "DVD Player\n";
    }

    public function setStereoSound()
    {
        echo "Amplifier stereo sound on\n";
    }

    public function setSurroundSound()
    {
        echo "Amplifier surround sound on\n";
    }

    public function setTuner($tuner)
    {
        echo "Amplifier setting to tuner " . $tuner ." Tuner\n";
    }

    public function setVolume($volume)
    {
        echo "Amplifier setting volume to " . $volume . "\n";
    }

    public function __toString()
    {
        return "Top-O-Line ";
    }
}
