<?php

namespace App\DecoratorPattern\Decorator;

use App\DecoratorPattern\Decorator\CondimentDecorator;

class SteamedMilk extends CondimentDecorator
{
    public function getDescription()
    {
        return parent::getDescription() . ", Steamed Milk";
    }

    public function cost()
    {
        return 0.10 + parent::cost();
    }
}
