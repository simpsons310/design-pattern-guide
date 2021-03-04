<?php

namespace App\StrategyPattern\Behaviors;

use App\StrategyPattern\Interfaces\FlyBehaviorInterface;

class FlyRocketPowered implements FlyBehaviorInterface
{
    public function fly()
    {
        echo "I’m flying with a rocket!\n";
    }
}
