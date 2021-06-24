<?php

namespace App\FactoryPattern\PizzaIngredient;

use App\FactoryPattern\PizzaIngredient\PizzaIngredientFactory;
use App\FactoryPattern\PizzaIngredient\Ingredients\ThickCrustDough;
use App\FactoryPattern\PizzaIngredient\Ingredients\MozzarellaCheese;
use App\FactoryPattern\PizzaIngredient\Ingredients\PlumTomatoSauce;
use App\FactoryPattern\PizzaIngredient\Ingredients\BlackOlives;
use App\FactoryPattern\PizzaIngredient\Ingredients\Spinach;
use App\FactoryPattern\PizzaIngredient\Ingredients\Eggplant;
use App\FactoryPattern\PizzaIngredient\Ingredients\FrozenClams;
use App\FactoryPattern\PizzaIngredient\Ingredients\SlicedPepperoni;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough()
    {
        return new ThickCrustDough();
    }

    public function createSauce()
    {
        return new PlumTomatoSauce();
    }

    public function createCheese()
    {
        return new MozzarellaCheese();
    }

    public function createVeggies()
    {
        return [
            new BlackOlives(),
            new Spinach(),
            new Eggplant()
        ];
    }

    public function createClam()
    {
        return new FrozenClams();
    }

    public function createPepperoni()
    {
        return new SlicedPepperoni();
    }
}
