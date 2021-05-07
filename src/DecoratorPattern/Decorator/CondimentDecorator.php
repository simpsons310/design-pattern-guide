<?php

namespace App\DecoratorPattern\Decorator;

use App\DecoratorPattern\BeverageInterface;

class CondimentDecorator implements BeverageInterface
{
    protected $beverage;

    public function __construct(BeverageInterface $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription();
    }

    public function cost()
    {
        return $this->beverage->cost();
    }

    public function getSize()
    {
        return $this->beverage->getSize();
    }
}
