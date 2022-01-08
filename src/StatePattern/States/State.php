<?php

namespace App\StatePattern\States;

abstract class State
{
    abstract public function insertQuarter();

    abstract public function ejectQuarter();

    abstract public function turnCrank();

    abstract public function dispense();
}
