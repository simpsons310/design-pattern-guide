<?php

namespace App\MediatorPattern;

use App\MediatorPattern\Interfaces\Mediator as MediatorInterface;

class Mediator implements MediatorInterface
{
    protected $alarm;

    protected $coffeePot;

    protected $calendar;

    protected $sprinkler;

    public function __construct($alarm, $coffeePot, $calendar, $sprinkler)
    {
        $this->alarm = $alarm;
        $this->coffeePot = $coffeePot;
        $this->calendar = $calendar;
        $this->sprinkler = $sprinkler;
        $this->alarm->setMediator($this);
        $this->coffeePot->setMediator($this);
        $this->calendar->setMediator($this);
        $this->sprinkler->setMediator($this);
    }

    public function onEvent(string $event)
    {
        if ($event == 'alarm-snoozed') {
            echo "Mediator reacts on " . $event . " and trigger:\n";
            $this->coffeePot->start();
        } elseif ($event == 'calender-weekend') {
            echo "Mediator reacts on " . $event . " and trigger:\n";
            $this->alarm->turnOff();
            $this->coffeePot->turnOff();
        } elseif ($event == 'calender-weekday') {
            echo "Mediator reacts on " . $event . " and trigger:\n";
            $this->alarm->setAlarm('7', '00');
            $this->coffeePot->start();
        } elseif ($event == 'calender-trash-day') {
            echo "Mediator reacts on " . $event . " and trigger:\n";
            $this->alarm->setAlarm('6', '45');
        } elseif ($event == 'calendar-shower') {
            echo "Mediator reacts on " . $event . " and trigger:\n";
            $this->sprinkler->turnOff();
        } else {
            // echo "No event triggered\n";
        }
    }
}
