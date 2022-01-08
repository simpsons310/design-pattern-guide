<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\StrategyPattern\DuckSimulation;
use App\StrategyPattern\AdventureGame;
use App\ObserverPattern\WeatherStation;
use App\DecoratorPattern\StarbuzzCoffee;
use App\FactoryPattern\PizzaTestDrive;
use App\SingletonPattern\ChocolateFactory;
use App\CommandPattern\HomeAutomation;
use App\AdapterPattern\DuckTestDrive;
use App\FacadePattern\HomeTheaterTestDrive;
use App\TemplatePattern\BeverageDriveTest;
use App\IteratorPattern\MenuTestDrive;
use App\CompositePattern\MenuTestDrive as CompositeMenuTestDrive;
use App\StatePattern\GumballMachineTestDrive;

// new DuckSimulation();
// new AdventureGame();
// new WeatherStation();
// new StarbuzzCoffee();
// new PizzaTestDrive();
// new ChocolateFactory();
// new HomeAutomation();
// new DuckTestDrive();
// new HomeTheaterTestDrive();
// new BeverageDriveTest();
// new MenuTestDrive();
// new CompositeMenuTestDrive();
new GumballMachineTestDrive();
