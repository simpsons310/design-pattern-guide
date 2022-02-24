<?php

namespace App\BridgePattern\Controls;

use App\BridgePattern\Interfaces\ControlInterface;

class SonyControl implements ControlInterface
{
    public function on()
    {
        echo "Turn on TV by Sony control\n";
    }

    public function off()
    {
        echo "Turn off TV by Sony control\n";
    }

    public function tuneChannel($channel)
    {
        echo "Turn to channel $channel by Sony Control\n";
    }
}
