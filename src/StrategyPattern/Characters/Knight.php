<?php

namespace App\StrategyPattern\Characters;

use App\StrategyPattern\Characters\Character;
use App\StrategyPattern\Behaviors\SwordBehavior;

class Knight extends Character
{
    public function __construct()
    {
        parent::__construct(new SwordBehavior());
    }

    public function display()
    {
        echo "+ I'm the Knight!\n";
    }
}
