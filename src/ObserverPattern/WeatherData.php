<?php

namespace App\ObserverPattern;

use App\ObserverPattern\Interfaces\Subject;
use App\ObserverPattern\Interfaces\Observer;

class WeatherData implements Subject
{
    private $observers = [];

    private $temperature = 0;

    private $humidity = 0;

    private $pressure = 0;

    public function registerObserver(Observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver(Observer $observer)
    {
        if (($key = array_search($observer, $this->observers)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers()
    {
        $data = [
            'temperature' => $this->temperature,
            'humidity' => $this->humidity,
            'pressure' => $this->pressure
        ];
        foreach ($this->observers as $observer) {
            $observer->update($data);
        }
    }

    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function getTemperature()
    {
        return $this->temperature;
    }

    public function getHumidity()
    {
        return $this->humidity;
    }

    public function getPressure()
    {
        return $this->pressure;
    }
}
