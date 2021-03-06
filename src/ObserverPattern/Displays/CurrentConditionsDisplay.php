<?php

namespace App\ObserverPattern\Displays;

use App\ObserverPattern\Interfaces\Subject;
use App\ObserverPattern\Interfaces\Observer;
use App\ObserverPattern\Interfaces\DisplayElement;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;

    private $humidity;

    private $pressure;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update($data)
    {
        $this->temperature = $data['temperature'];
        $this->humidity = $data['humidity'];
        $this->pressure = $data['pressure'];
        $this->display();
    }

    public function display()
    {
        echo "Current conditions: " . $this->temperature . "F degrees and " . $this->humidity . "% humidity\n";
    }
}
