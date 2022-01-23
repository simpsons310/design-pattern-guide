<?php

namespace App\CompoundPatterns;

use App\CompoundPatterns\Ducks\MallardDuck;
use App\CompoundPatterns\Ducks\DuckCall;
use App\CompoundPatterns\Ducks\GooseAdaptor;
use App\CompoundPatterns\Ducks\RedHeadDuck;
use App\CompoundPatterns\Ducks\RubberDuck;
use App\CompoundPatterns\Geese\Goose;
use App\CompoundPatterns\Interfaces\Quackable;
use App\CompoundPatterns\Quackologists\QuackCounter;

class DuckSimulator
{
    public function __construct()
    {
        $this->simulateDucks();
    }

    private function simulateDucks()
    {
        $mallardDuck = new QuackCounter(new MallardDuck());
        $redHeadDuck = new QuackCounter(new RedHeadDuck());
        $duckCall = new QuackCounter(new DuckCall());
        $rubberDuck = new QuackCounter(new RubberDuck());
        $gooseDuck = new QuackCounter(new GooseAdaptor(new Goose()));

        echo "Duck simulator\n";

        $this->simulate($mallardDuck);
        $this->simulate($redHeadDuck);
        $this->simulate($duckCall);
        $this->simulate($rubberDuck);
        $this->simulate($gooseDuck);

        echo "The ducks quacked " . QuackCounter::getQuacks() . " times\n";
    }

    private function simulate(Quackable $duck)
    {
        $duck->quack();
    }
}
