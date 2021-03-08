<?php

namespace App\StrategyPattern;

use App\StrategyPattern\Characters\King;
use App\StrategyPattern\Characters\Queen;
use App\StrategyPattern\Characters\Knight;
use App\StrategyPattern\Characters\Troll;
use App\StrategyPattern\Behaviors\SwordBehavior;

class AdventureGame
{
    public function __construct()
    {
        $king = new King();
        $king->display();
        $king->fight();
        $queen = new Queen();
        $queen->display();
        $queen->fight();
        $knight = new Knight();
        $knight->display();
        $knight->fight();
        $troll = new Troll();
        $troll->display();
        $troll->fight();
        $king->setWeapon(new SwordBehavior());
        $king->fight();
    }
}
