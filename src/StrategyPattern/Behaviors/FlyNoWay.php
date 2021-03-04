<?php

namespace App\StrategyPattern\Behaviors;

use App\StrategyPattern\Interfaces\FlyBehaviorInterface;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        echo "I can't fly\n";
    }
}
