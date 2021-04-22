<?php

namespace App\ObserverPattern;

use App\ObserverPattern\Displays\CurrentConditionsDisplay;
use App\ObserverPattern\Displays\StatisticsDisplay;
use App\ObserverPattern\Displays\ForecastDisplay;
use App\ObserverPattern\Displays\HeatIndexDisplay;
use App\ObserverPattern\WeatherData;

class WeatherStation
{
    public function __construct()
    {
        $weatherData = new WeatherData();
        $currentConditions = new CurrentConditionsDisplay($weatherData);
        $statistics = new StatisticsDisplay($weatherData);
        $forecast = new ForecastDisplay($weatherData);
        $heatIndex = new HeatIndexDisplay($weatherData);

        for ($i = 0; $i < 20; $i++) {
            $weatherData->setMeasurements(rand(20, 50), rand(50, 100), rand(0, 30));
            echo "-------------------------------\n";
            sleep(5);
        };
    }
}
