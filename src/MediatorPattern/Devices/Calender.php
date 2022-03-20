<?php

namespace App\MediatorPattern\Devices;

class Calender extends Device
{
    protected $showerTime;

    public function weekend()
    {
        echo "Today is weekend\n";
        $this->mediator->onEvent('calender-weekend');
    }

    public function weekday()
    {
        echo "Today is weekday\n";
        $this->mediator->onEvent('calender-weekday');
    }

    public function trashDay()
    {
        echo "Today is trash day\n";
        $this->mediator->onEvent('calender-trash-day');
    }

    public function shower()
    {
        echo "Time to shower\n";
        $this->mediator->onEvent('calendar-shower');
    }
}
