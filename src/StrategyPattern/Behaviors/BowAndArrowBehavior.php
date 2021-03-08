<?php

namespace App\StrategyPattern\Behaviors;

use App\StrategyPattern\Interfaces\WeaponBehaviorInterface;

class BowAndArrowBehavior implements WeaponBehaviorInterface
{
    public function fight()
    {
        echo "Shooting an arrow with a bow!\n";
    }
}
