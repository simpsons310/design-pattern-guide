<?php

namespace App\CommandPattern\Commands;

use App\CommandPattern\Commands\Command;
use App\CommandPattern\Devices\Stereo;

class StereoOnWithCDCommand implements Command
{
    protected $stereo;

    protected $prevMode;

    protected $prevVolume;

    protected $prevState;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->prevMode = $this->stereo->getMode();
        $this->prevVolume = $this->stereo->getVolume();
        $this->prevState = $this->stereo->getState();
        $this->stereo->on();
        $this->stereo->setCD();
        $this->stereo->setVolume(12);
    }

    public function undo()
    {
        if ($this->prevState == $this->stereo::ON) {
            $this->stereo->off();
        } elseif ($this->prevState == $this->stereo::OFF) {
            $this->stereo->on();
            switch ($this->prevMode) {
                case $this->stereo::MODE_CD:
                    $this->stereo->setCD();
                    break;
                case $this->stereo::MODE_DVD:
                    $this->stereo->setDvd();
                    break;
                case $this->stereo::MODE_RADIO:
                    $this->stereo->setRadio();
                    break;
                default:
            }
            $this->stereo->setVolume($this->prevVolume);
        }
    }
}
