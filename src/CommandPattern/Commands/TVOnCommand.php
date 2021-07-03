<?php

namespace App\CommandPattern\Commands;

use App\CommandPattern\Commands\Command;
use App\CommandPattern\Devices\TV;

class TVOnCommand implements Command
{
    protected $tv;

    protected $prevChannel;

    protected $prevVolume;

    protected $prevState;

    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute()
    {
        $this->prevChannel = $this->tv->getChannel();
        $this->prevVolume = $this->tv->getVolume();
        $this->prevState = $this->tv->getState();
        $this->tv->on();
        $this->tv->setChannel(5);
        $this->tv->setVolume(12);
    }

    public function undo()
    {
        if ($this->prevState == $this->tv::ON) {
            $this->tv->off();
        } elseif ($this->prevState == $this->tv::OFF) {
            $this->tv->on();
            $this->tv->setVolume($this->prevVolume);
            $this->tv->setChannel($this->prevChannel);
        }
    }
}
