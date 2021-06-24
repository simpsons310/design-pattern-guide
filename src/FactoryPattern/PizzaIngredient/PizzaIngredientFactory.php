<?php

namespace App\FactoryPattern\PizzaIngredient;

interface PizzaIngredientFactory
{
    public function createDough();
    public function createSauce();
    public function createCheese();
    public function createVeggies();
    public function createClam();
}
