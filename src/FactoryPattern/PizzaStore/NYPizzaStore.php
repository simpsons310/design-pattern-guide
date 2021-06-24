<?php

namespace App\FactoryPattern\PizzaStore;

use App\FactoryPattern\PizzaStore\PizzaStore;
use App\FactoryPattern\PizzaIngredient\NYPizzaIngredientFactory;
use App\FactoryPattern\Pizza\CheesePizza;
use App\FactoryPattern\Pizza\VeggiePizza;
use App\FactoryPattern\Pizza\ClamPizza;
use App\FactoryPattern\Pizza\PepperoniPizza;

class NYPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        $ingredientFactory = new NYPizzaIngredientFactory();
        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } elseif ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('New York Style Veggie Pizza');
        } elseif ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('New York Style Pepperoni Pizza');
        } else {
            $pizza = null;
        }
        return $pizza;
    }
}
