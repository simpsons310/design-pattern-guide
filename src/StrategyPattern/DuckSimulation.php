<?php

namespace App\StrategyPattern;

use App\StrategyPattern\Ducks\MallardDuck;
use App\StrategyPattern\Ducks\ModelDuck;
use App\StrategyPattern\Behaviors\FlyRocketPowered;

class DuckSimulation
{
    public function __construct()
    {
        $mallardDuck = new MallardDuck();
        $mallardDuck->display();
        $mallardDuck->performFly();
        $mallardDuck->performQuack();
        $modelDuck = new ModelDuck();
        $modelDuck->display();
        $modelDuck->performQuack();
        $modelDuck->performFly();
        $modelDuck->setFlyBehavior(new FlyRocketPowered());
        $modelDuck->performFly();
    }
}
