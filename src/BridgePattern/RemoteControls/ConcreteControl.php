<?php

namespace App\BridgePattern\RemoteControls;

class ConcreteControl extends RemoteControl
{
    protected $currenChannel = 1;

    public function setChannel($channel)
    {
        echo "Using Concrete Control: ";
        $this->control->tuneChannel($channel);
        $this->currenChannel = $channel;
    }

    public function nextChannel()
    {
        $this->setChannel($this->currenChannel + 1);
    }

    public function previousChannel()
    {
        $this->setChannel($this->currenChannel - 1);
    }
}
