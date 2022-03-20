<?php

namespace App\MediatorPattern;

use App\MediatorPattern\Devices\Alarm;
use App\MediatorPattern\Devices\Calender;
use App\MediatorPattern\Devices\CoffeePot;
use App\MediatorPattern\Devices\Sprinkler;

class HouseOfTheFuture
{
    public function __construct()
    {
        $alarm = new Alarm();
        $coffeePot = new CoffeePot();
        $calendar = new Calender();
        $sprinkler = new Sprinkler();
        new Mediator($alarm, $coffeePot, $calendar, $sprinkler);

        $calendar->weekday();
        echo "\n";

        $calendar->weekend();
        echo "\n";

        $calendar->trashDay();
        echo "\n";

        $calendar->shower();
        echo "\n";

        $alarm->snooze();
        echo "\n";
    }
}
