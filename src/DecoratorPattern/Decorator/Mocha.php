<?php

namespace App\DecoratorPattern\Decorator;

use App\DecoratorPattern\Decorator\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    public function getDescription()
    {
        return parent::getDescription() . ", Mocha";
    }

    public function cost()
    {
        return 0.20 + parent::cost();
    }
}
