<?php

namespace StrategyPattern;

use StrategyPattern\Interfaces\FlyBehaviorInterface;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        echo "I’m flying!!";
    }
}
