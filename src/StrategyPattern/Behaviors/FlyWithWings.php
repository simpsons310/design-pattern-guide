<?php

namespace App\StrategyPattern\Behaviors;

use App\StrategyPattern\Interfaces\FlyBehaviorInterface;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        echo "I’m flying!!\n";
    }
}
