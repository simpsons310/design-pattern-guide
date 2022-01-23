<?php

namespace App\CompoundPatterns\Factories;

use App\CompoundPatterns\Ducks\MallardDuck;
use App\CompoundPatterns\Ducks\DuckCall;
use App\CompoundPatterns\Ducks\RedHeadDuck;
use App\CompoundPatterns\Ducks\RubberDuck;

class DuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck()
    {
        return new MallardDuck();
    }

    public function createRedHeadDuck()
    {
        return new RedHeadDuck();
    }

    public function createDuckCall()
    {
        return new DuckCall();
    }

    public function createRubberDuck()
    {
        return new RubberDuck();
    }
}
