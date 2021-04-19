<?php

namespace App\ObserverPattern;

use App\ObserverPattern;
use App\ObserverPattern\Interfaces\Observer;

class WeatherData implements Subject
{
    private $observer = [];
    private $temperature = 0;
    private $humidity = 0;
    private $pressure = 0;

    public function registerObserver(Observer $observer)
    {
        array_push($this->observer, $observer);
    }

    public function removeObserver(Observer $observer)
    {
        
    }
}
