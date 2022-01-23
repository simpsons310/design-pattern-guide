<?php

namespace App\CompoundPatterns;

use App\CompoundPatterns\Ducks\MallardDuck;
use App\CompoundPatterns\Ducks\DuckCall;
use App\CompoundPatterns\Ducks\GooseAdaptor;
use App\CompoundPatterns\Ducks\RedHeadDuck;
use App\CompoundPatterns\Ducks\RubberDuck;
use App\CompoundPatterns\Geese\Goose;
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
        $gooseDuck = new GooseAdaptor(new Goose());

        echo "Duck simulator\n";

        $this->simulate($mallardDuck);
        $this->simulate($redHeadDuck);
        $this->simulate($duckCall);
        $this->simulate($rubberDuck);
        $this->simulate($gooseDuck);
    }

    private function simulate(Quackable $duck)
    {
        $duck->quack();
    }
}
