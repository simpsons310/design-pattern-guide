<?php

namespace App\ObserverPattern\Displays;

use App\ObserverPattern\Interfaces\Subject;
use App\ObserverPattern\Interfaces\Observer;
use App\ObserverPattern\Interfaces\DisplayElement;

class ForecastDisplay implements Observer, DisplayElement
{
    private $lastPressure = 0;

    private $pressure = 0;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($data)
    {
        $this->lastPressure = $this->pressure;
        $this->pressure = $data['pressure'];
        $this->display();
    }

    public function display()
    {
        echo "Forecast: ";
        if ($this->lastPressure >= $this->pressure) {
            echo "Pressure increasing\n";
        } else {
            echo "Pressure decreasing\n";
        }
    }
}
