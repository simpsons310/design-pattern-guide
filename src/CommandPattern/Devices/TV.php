<?php

namespace App\CommandPattern\Devices;

class TV
{
    const OFF = 0;
    const ON = 1;

    protected $place = '';

    protected $volume;

    protected $channel;

    protected $state;

    public function __construct($place)
    {
        $this->place = $place;
    }

    public function on()
    {
        echo $this->place . " TV is on\n";
    }

    public function off()
    {
        echo $this->place . " TV is off\n";
    }

    public function setChannel(int $channel)
    {
        $this->channel = $channel;
        echo $this->place . " TV is set for to " . $channel . " channel\n";
    }
    
    public function setVolume(int $volume)
    {
        $this->volume = $volume;
        echo $this->place . " TV volume set to " . $volume . "\n";
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function getState()
    {
        return $this->state;
    }
}
