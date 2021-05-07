<?php

namespace App\DecoratorPattern\Beverage;

use App\DecoratorPattern\Beverage\Beverage;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast';
    }

    public function cost()
    {
        return 0.99;
    }
}
