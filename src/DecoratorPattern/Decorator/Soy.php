<?php

namespace App\DecoratorPattern\Decorator;

use App\DecoratorPattern\Decorator\CondimentDecorator;
use App\DecoratorPattern\BeverageInterface;

class Soy extends CondimentDecorator
{
    public function getDescription()
    {
        return parent::getDescription() . ", Soy";
    }

    public function cost()
    {
        return parent::cost() + $this->calCost();
    }

    private function calCost()
    {
        $size = $this->beverage->getSize();
        switch ($size) {
            case 'big':
                return 0.20;
            case 'small':
                return 0.10;
            case 'medium':
            default:
                return 0.15;
        }
    }
}
