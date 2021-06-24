<?php

namespace App\FactoryPattern\PizzaStore;

use App\FactoryPattern\PizzaStore\PizzaStore;
use App\FactoryPattern\PizzaIngredient\ChicagoPizzaIngredientFactory;
use App\FactoryPattern\Pizza\CheesePizza;
use App\FactoryPattern\Pizza\VeggiePizza;
use App\FactoryPattern\Pizza\ClamPizza;
use App\FactoryPattern\Pizza\PepperoniPizza;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();
        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } elseif ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('Chicago Style Veggie Pizza');
        } elseif ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('Chicago Style Pepperoni Pizza');
        } else {
            $pizza = null;
        }
        return $pizza;
    }
}
