<?php

namespace App\StrategyPattern;

use App\StrategyPattern\Interfaces\QuackBehaviorInterface;

class Squeak implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "Squeak\n";
    }
}
