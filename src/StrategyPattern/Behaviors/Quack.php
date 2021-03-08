<?php

namespace App\StrategyPattern\Behaviors;

use App\StrategyPattern\Interfaces\QuackBehaviorInterface;

class Quack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "Quack!!\n";
    }
}
