<?php

namespace App\StrategyPattern\Ducks;

use App\StrategyPattern\Ducks\Duck;
use App\StrategyPattern\Behaviors\FlyWithWings;
use App\StrategyPattern\Behaviors\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        parent::__construct(new FlyWithWings(), new Quack());
    }

    public function display()
    {
        echo "- I’m a real Mallard duck!\n";
    }
}
