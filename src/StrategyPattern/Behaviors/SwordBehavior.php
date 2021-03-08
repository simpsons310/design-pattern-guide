<?php

namespace App\StrategyPattern\Behaviors;

use App\StrategyPattern\Interfaces\WeaponBehaviorInterface;

class SwordBehavior implements WeaponBehaviorInterface
{
    public function fight()
    {
        echo "Swinging a sword!\n";
    }
}
