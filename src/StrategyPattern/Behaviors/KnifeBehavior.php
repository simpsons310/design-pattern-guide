<?php

namespace App\StrategyPattern\Behaviors;

use App\StrategyPattern\Interfaces\WeaponBehaviorInterface;

class KnifeBehavior implements WeaponBehaviorInterface
{
    public function fight()
    {
        echo "Cutting with a knife\n";
    }
}
