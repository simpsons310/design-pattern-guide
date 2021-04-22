<?php

namespace App\ObserverPattern\Displays;

use App\ObserverPattern\Interfaces\Subject;
use App\ObserverPattern\Interfaces\Observer;
use App\ObserverPattern\Interfaces\DisplayElement;

class StatisticsDisplay implements Observer, DisplayElement
{
    private $temperature = 0;

    private $totalTemp = 0;

    private $numReading = 0;

    private $maxTemp = 0;

    private $minTemp = 1000;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($data)
    {
        $temp = $data['temperature'];
        $this->totalTemp += $temp;
        $this->numReading++;

        if ($temp > $this->maxTemp) {
            $this->maxTemp = $temp;
        }

        if ($temp < $this->minTemp) {
            $this->minTemp = $temp;
        }
        $this->display();
    }

    public function display()
    {
        echo "Avg/Max/Min temperature = " . $this->totalTemp / $this->numReading . '/' . $this->maxTemp . '/' . $this->minTemp . "\n";
    }
}
