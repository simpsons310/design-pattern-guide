<?php

namespace App\BridgePattern;

use App\BridgePattern\Controls\RCAControl;
use App\BridgePattern\Controls\SonyControl;
use App\BridgePattern\RemoteControls\ConcreteControl;
use App\BridgePattern\RemoteControls\RemoteControl;

class ControlTV
{
    public function __construct()
    {
        echo "Remote RCA Control\n";
        $rcaControl = new RCAControl();
        $remoteControl = new RemoteControl($rcaControl);
        $remoteControl->on();
        $remoteControl->setChannel(2);
        $remoteControl->off();

        echo "\nConcrete Sony Control\n";
        $sonyControl = new SonyControl();
        $concreteControl = new ConcreteControl($sonyControl);
        $concreteControl->on();
        $concreteControl->setChannel(5);
        $concreteControl->nextChannel();
        $concreteControl->setChannel(7);
        $concreteControl->previousChannel();
        $concreteControl->off();
    }
}
