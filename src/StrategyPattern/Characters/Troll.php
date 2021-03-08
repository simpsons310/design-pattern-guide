<?php

namespace App\StrategyPattern\Characters;

use App\StrategyPattern\Characters\Character;
use App\StrategyPattern\Behaviors\AxeBehavior;

class Troll extends Character
{
    public function __construct()
    {
        parent::__construct(new AxeBehavior());
    }

    public function display()
    {
        echo "+ I'm the Troll!\n";
    }
}
