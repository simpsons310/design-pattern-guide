<?php

namespace App\BridgePattern\RemoteControls;

use App\BridgePattern\Interfaces\ControlInterface;

class RemoteControl
{
    protected ControlInterface $control;

    public function __construct(ControlInterface $control)
    {
        $this->control = $control;
    }

    public function on()
    {
        echo "Using Remote Control: ";
        $this->control->on();
    }

    public function off()
    {
        echo "Using Remote Control: ";
        $this->control->off();
    }

    public function setChannel($channel)
    {
        echo "Using Remote Control: ";
        $this->control->tuneChannel($channel);
    }
}
