<?php

namespace App\FactoryPattern\PizzaStore;

abstract class PizzaStore
{
    abstract public function createPizza($type);

    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->display();

        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
