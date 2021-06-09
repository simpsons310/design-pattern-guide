<?php

namespace App\DecoratorPattern\Beverage;

use App\DecoratorPattern\Beverage\Beverage;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    public function cost()
    {
        return 0.89;
    }
}
