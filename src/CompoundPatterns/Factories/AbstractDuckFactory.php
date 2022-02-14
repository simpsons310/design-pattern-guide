<?php

namespace App\CompoundPatterns\Factories;

abstract class AbstractDuckFactory
{
    abstract public function createMallardDuck();

    abstract public function createRedHeadDuck();

    abstract public function createDuckCall();

    abstract public function createRubberDuck();
}
