<?php

namespace App\BridgePattern\Interfaces;

interface ControlInterface
{
    public function on();

    public function off();

    public function tuneChannel($channel);
}
