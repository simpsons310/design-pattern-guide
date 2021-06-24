<?php

namespace App\FactoryPattern\PizzaIngredient;

use App\FactoryPattern\PizzaIngredient\PizzaIngredientFactory;
use App\FactoryPattern\PizzaIngredient\Ingredients\ThinCrustDough;
use App\FactoryPattern\PizzaIngredient\Ingredients\ReggianoCheese;
use App\FactoryPattern\PizzaIngredient\Ingredients\MarinaraSauce;
use App\FactoryPattern\PizzaIngredient\Ingredients\Garlic;
use App\FactoryPattern\PizzaIngredient\Ingredients\Onion;
use App\FactoryPattern\PizzaIngredient\Ingredients\Mushroom;
use App\FactoryPattern\PizzaIngredient\Ingredients\RedPepper;
use App\FactoryPattern\PizzaIngredient\Ingredients\FreshClams;
use App\FactoryPattern\PizzaIngredient\Ingredients\SlicedPepperoni;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough()
    {
        return new ThinCrustDough();
    }

    public function createSauce()
    {
        return new MarinaraSauce();
    }

    public function createCheese()
    {
        return new ReggianoCheese();
    }

    public function createVeggies()
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper()
        ];
    }

    public function createClam()
    {
        return new FreshClams();
    }

    public function createPepperoni()
    {
        return new SlicedPepperoni();
    }
}
