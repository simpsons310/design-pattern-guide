<?php

namespace App\DecoratorPattern\Decorator;

use App\DecoratorPattern\Decorator\CondimentDecorator;

class Whip extends CondimentDecorator
{
    public function getDescription()
    {
        return parent::getDescription() . ", Whip";
    }

    public function cost()
    {
        return 0.10 + parent::cost();
    }
}
