<?php

namespace App\StrategyPattern\Characters;

use App\StrategyPattern\Characters\Character;
use App\StrategyPattern\Behaviors\BowAndArrowBehavior;

class King extends Character
{
    public function __construct()
    {
        parent::__construct(new BowAndArrowBehavior());
    }

    public function display()
    {
        echo "+ I'm the King!\n";
    }
}
