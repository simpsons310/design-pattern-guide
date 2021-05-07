<?php

namespace App\DecoratorPattern;

use App\DecoratorPattern\BeverageInterface;
use App\DecoratorPattern\Decorator\Mocha;
use App\DecoratorPattern\Decorator\Soy;
use App\DecoratorPattern\Decorator\SteamedMilk;
use App\DecoratorPattern\Decorator\Whip;
use App\DecoratorPattern\Beverage\DarkRoast;
use App\DecoratorPattern\Beverage\Decaf;
use App\DecoratorPattern\Beverage\Espresso;
use App\DecoratorPattern\Beverage\HouseBlend;

class StarbuzzCoffee
{
    public function __construct()
    {
        $espresso = new Espresso();
        $this->display($espresso);

        $darkRoast = new DarkRoast();
        $darkRoast = new Mocha($darkRoast);
        $darkRoast = new Whip($darkRoast);
        $darkRoast = new Mocha($darkRoast);
        $this->display($darkRoast);

        $decaf = new Decaf();
        $decaf->setSize('small');
        $decaf = new SteamedMilk($decaf);
        $decaf = new Soy($decaf);
        $this->display($decaf);

        $houseBlend = new HouseBlend();
        $houseBlend = new Soy($houseBlend);
        $houseBlend = new Whip($houseBlend);
        $this->display($houseBlend);
    }

    private function display(BeverageInterface $beverage)
    {
        echo $beverage->getDescription() . ': $' . $beverage->cost() . "\n";
    }
}
