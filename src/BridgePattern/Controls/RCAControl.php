<?php

namespace App\BridgePattern\Controls;

use App\BridgePattern\Interfaces\ControlInterface;

class RCAControl implements ControlInterface
{
    public function on()
    {
        echo "Turn on TV by RCA control\n";
    }

    public function off()
    {
        echo "Turn off TV by RCA control\n";
    }

    public function tuneChannel($channel)
    {
        echo "Turn to channel $channel by RCA Control\n";
    }
}
