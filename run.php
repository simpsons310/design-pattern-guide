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
use App\ProxyPattern\PersonBeanTestDrive;
use App\ProxyPattern\SimpleDownloaderTestDrive;
use App\CompoundPatterns\DuckSimulator;
use App\MVCPattern\Application;
use App\MVCPattern\MVCTest;
use App\BridgePattern\ControlTV;
use App\BridgePattern\PageRenderer;
use App\BuilderPattern\Planner;
use App\ChainOfResponsibilityPattern\MailHandler;

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
// new GumballMachineTestDrive();
// new PersonBeanTestDrive();
// new SimpleDownloaderTestDrive();
// new DuckSimulator();
// new MVCTest(); // run: php -s localhost/{port} -> http://locahost:{port}/run.php
// new ControlTV();
// new PageRenderer();
// new Planner();
new MailHandler();
