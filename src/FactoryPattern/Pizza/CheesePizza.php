<?php

namespace App\FactoryPattern\Pizza;

use App\FactoryPattern\Pizza\Pizza;
use App\FactoryPattern\PizzaIngredient\PizzaIngredientFactory;

class CheesePizza extends Pizza
{
    protected $pizzaIngredientFactory;

    public function __construct(
        PizzaIngredientFactory $pizzaIngredientFactory
    ) {
        $this->pizzaIngredientFactory = $pizzaIngredientFactory;
    }

    public function prepare()
    {
        $this->dough = $this->pizzaIngredientFactory->createDough();
        $this->sauce = $this->pizzaIngredientFactory->createSauce();
        $this->cheese = $this->pizzaIngredientFactory->createCheese();
    }
}
