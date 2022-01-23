<?php

namespace App\CompoundPatterns;

use App\CompoundPatterns\Ducks\MallardDuck;
use App\CompoundPatterns\Ducks\DuckCall;
use App\CompoundPatterns\Ducks\RedHeadDuck;
use App\CompoundPatterns\Ducks\RubberDuck;
use App\CompoundPatterns\Interfaces\Quackable;

class DuckSimulator
{
    public function __construct()
    {
        $this->simulateDucks();
    }

    private function simulateDucks()
    {
        $mallardDuck = new MallardDuck();
        $redHeadDuck = new RedHeadDuck();
        $duckCall = new DuckCall();
        $rubberDuck = new RubberDuck();

        echo "Duck simulator\n";

        $this->simulate($mallardDuck);
        $this->simulate($redHeadDuck);
        $this->simulate($duckCall);
        $this->simulate($rubberDuck);
    }

    private function simulate(Quackable $duck)
    {
        $duck->quack();
    }
}
