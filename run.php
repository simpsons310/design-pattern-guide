<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\StrategyPattern\DuckSimulation;
use App\StrategyPattern\AdventureGame;
use App\ObserverPattern\WeatherStation;
use App\DecoratorPattern\StarbuzzCoffee;
use App\FactoryPattern\PizzaTestDrive;
use App\SingletonPattern\ChocolateFactory;

// new DuckSimulation();
// new AdventureGame();
// new WeatherStation();
// new StarbuzzCoffee();
// new PizzaTestDrive();
new ChocolateFactory();
