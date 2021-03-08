<?php

namespace App\StrategyPattern\Characters;

use App\StrategyPattern\Characters\Character;
use App\StrategyPattern\Behaviors\KnifeBehavior;

class Queen extends Character
{
    public function __construct()
    {
        parent::__construct(new KnifeBehavior());
    }

    public function display()
    {
        echo "+ I'm the Queen!\n";
    }
}
