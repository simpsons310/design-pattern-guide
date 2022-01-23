<?php

namespace App\CompoundPatterns\Factories;

use App\CompoundPatterns\Ducks\MallardDuck;
use App\CompoundPatterns\Ducks\DuckCall;
use App\CompoundPatterns\Ducks\RedHeadDuck;
use App\CompoundPatterns\Ducks\RubberDuck;
use App\CompoundPatterns\Quackologists\QuackCounter;

class CountingDuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck()
    {
        return new QuackCounter(new MallardDuck());
    }

    public function createRedHeadDuck()
    {
        return new QuackCounter(new RedHeadDuck());
    }

    public function createDuckCall()
    {
        return new QuackCounter(new DuckCall());
    }

    public function createRubberDuck()
    {
        return new QuackCounter(new RubberDuck());
    }
}
