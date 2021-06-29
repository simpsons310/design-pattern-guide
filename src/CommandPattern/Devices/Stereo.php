<?php

namespace App\CommandPattern\Devices;

class Stereo
{
    const OFF = 0;
    const ON = 1;
    const MODE_CD = 1;
    const MODE_DVD = 2;
    const MODE_RADIO = 3;

    protected $place = '';

    protected $volume;

    protected $mode;

    protected $state;

    public function __construct($place)
    {
        $this->place = $place;
    }

    public function on()
    {
        echo $this->place . " stereo is on\n";
    }

    public function off()
    {
        echo $this->place . " stereo is off\n";
    }

    public function setCD()
    {
        $this->mode = self::MODE_CD;
        echo $this->place . " stereo is set for CD input\n";
    }

    public function setDvd()
    {
        $this->mode = self::MODE_DVD;
        echo $this->place . " stereo is set for DVD input\n";
    }

    public function setRadio()
    {
        $this->mode = self::MODE_RADIO;
        echo $this->place . " stereo is set for Radio\n";
    }
    
    public function setVolume(int $volume)
    {
        $this->volume = $volume;
        echo $this->place . " stereo volume set to " . $volume . "\n";
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function getMode()
    {
        return $this->mode;
    }

    public function getState()
    {
        return $this->state;
    }
}
