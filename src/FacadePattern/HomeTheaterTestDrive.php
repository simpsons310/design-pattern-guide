<?php

namespace App\FacadePattern;

use App\FacadePattern\Devices\Amplifier;
use App\FacadePattern\Devices\Tuner;
use App\FacadePattern\Devices\DvdPlayer;
use App\FacadePattern\Devices\CdPlayer;
use App\FacadePattern\Devices\Projector;
use App\FacadePattern\Devices\Screen;
use App\FacadePattern\Devices\TheaterLight;
use App\FacadePattern\Devices\PopcornPopper;

class HomeTheaterTestDrive
{
    public function __construct()
    {
        $amp = new Amplifier();
        $tuner = new Tuner();
        $dvd = new DvdPlayer();
        $cd = new CdPlayer();
        $projector = new Projector();
        $screen = new Screen();
        $light = new TheaterLight();
        $popper = new PopcornPopper();

        $homeTheater = new HomeTheaterFacade($amp, $tuner, $dvd, $cd, $projector, $screen, $light, $popper);
        
        $homeTheater->watchMovie("Raiders of the Lost Ark");
        $homeTheater->endMovie();
    }
}
