<?php

namespace App\DecoratorPattern\Beverage;

use App\DecoratorPattern\Beverage\Beverage;

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    public function cost()
    {
        return 1.99;
    }
}
