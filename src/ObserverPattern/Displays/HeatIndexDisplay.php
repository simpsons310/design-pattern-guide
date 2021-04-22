<?php

namespace App\ObserverPattern\Displays;

use App\ObserverPattern\Interfaces\Subject;
use App\ObserverPattern\Interfaces\Observer;
use App\ObserverPattern\Interfaces\DisplayElement;

class HeatIndexDisplay implements Observer, DisplayElement
{
    private $heatIndex = 0;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($data)
    {
        $this->heatIndex = $this->calculateHeatIndex($data['temperature'], $data['humidity']);
        $this->display();
    }

    private function calculateHeatIndex($temp, $humidity)
    {
        return $temp * $humidity / rand(1, 20);
    }

    public function display()
    {
        echo "HeatIndex: " . $this->heatIndex . "\n";
    }
}
