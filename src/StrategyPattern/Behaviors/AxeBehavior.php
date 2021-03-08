<?php

namespace App\StrategyPattern\Behaviors;

use App\StrategyPattern\Interfaces\WeaponBehaviorInterface;

class AxeBehavior implements WeaponBehaviorInterface
{
    public function fight()
    {
        echo "Chopping with an axe!!\n";
    }
}
