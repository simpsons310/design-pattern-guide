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

class HomeTheaterFacade
{
    protected $amp;

    protected $tuner;

    protected $dvdPlayer;

    protected $cdPlayer;

    protected $projector;

    protected $screen;

    protected $light;

    protected $popper;

    public function __construct(
        Amplifier $amp,
        Tuner $tuner,
        DvdPlayer $dvdPlayer,
        CdPlayer $cdPlayer,
        Projector $projector,
        Screen $screen,
        TheaterLight $light,
        PopcornPopper $popper
    ) {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvdPlayer = $dvdPlayer;
        $this->cdPlayer = $cdPlayer;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->light = $light;
        $this->popper = $popper;
    }

    public function watchMovie(string $movie)
    {
        echo "Get ready to watch a movie...\n";
        $this->popper->on();
        $this->popper->pop();
        $this->light->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvdPlayer);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvdPlayer->on();
        $this->dvdPlayer->play($movie);
    }

    public function endMovie()
    {
        echo "Shutting movie theater down...\n";
        $this->popper->off();
        $this->light->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvdPlayer->stop();
        $this->dvdPlayer->eject();
        $this->dvdPlayer->off();
    }
}
