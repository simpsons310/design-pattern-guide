<?php

namespace App\MediatorPattern\Devices;

class Alarm extends Device
{
    public function snooze()
    {
        echo "Alarm snoozed!\n";
        $this->mediator->onEvent('alarm-snoozed');
    }

    public function setAlarm($hour, $minute)
    {
        echo "Alarm set at " . $hour . ":" . $minute . "\n";
        $this->mediator->onEvent('alarm-set');
    }

    public function turnOff()
    {
        echo "Alarm is turned off\n";
        $this->mediator->onEvent('alarm-off');
    }
}
