<?php

namespace App\StrategyPattern;

use App\StrategyPattern\Interfaces\QuackBehaviorInterface;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo "<< Silence >>\n";
    }
}
