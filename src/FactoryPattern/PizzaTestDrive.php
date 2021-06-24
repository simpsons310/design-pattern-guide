<?php

namespace App\FactoryPattern;

use App\FactoryPattern\PizzaStore\NYPizzaStore;
use App\FactoryPattern\PizzaStore\ChicagoPizzaStore;

class PizzaTestDrive
{
    public function __construct()
    {
        $nyStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        echo "Ordered a " . $pizza->getName() . "\n\n";

        $pizza = $nyStore->orderPizza('veggie');
        echo "Ordered a " . $pizza->getName() . "\n\n";

        $pizza = $nyStore->orderPizza('pepperoni');
        echo "Ordered a " . $pizza->getName() . "\n\n";

        $pizza = $nyStore->orderPizza('clam');
        echo "Ordered a " . $pizza->getName() . "\n\n";

        $pizza = $chicagoStore->orderPizza('cheese');
        echo "Ordered a " . $pizza->getName() . "\n\n";

        $pizza = $chicagoStore->orderPizza('veggie');
        echo "Ordered a " . $pizza->getName() . "\n\n";

        $pizza = $chicagoStore->orderPizza('pepperoni');
        echo "Ordered a " . $pizza->getName() . "\n\n";

        $pizza = $chicagoStore->orderPizza('clam');
        echo "Ordered a " . $pizza->getName() . "\n\n";
    }
}
