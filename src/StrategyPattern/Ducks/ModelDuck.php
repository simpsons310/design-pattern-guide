<?php

namespace App\StrategyPattern\Ducks;

use App\StrategyPattern\Ducks\Duck;
use App\StrategyPattern\Behaviors\FlyNoWay;
use App\StrategyPattern\Behaviors\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new FlyNoWay(), new Quack());
    }

    public function display()
    {
        echo "- I’m a Model duck!\n";
    }
}
