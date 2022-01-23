<?php

namespace App\CompoundPatterns;

use App\CompoundPatterns\Ducks\MallardDuck;
use App\CompoundPatterns\Ducks\DuckCall;
use App\CompoundPatterns\Ducks\GooseAdaptor;
use App\CompoundPatterns\Ducks\RedHeadDuck;
use App\CompoundPatterns\Ducks\RubberDuck;
use App\CompoundPatterns\Factories\AbstractDuckFactory;
use App\CompoundPatterns\Factories\CountingDuckFactory;
use App\CompoundPatterns\Geese\Goose;
use App\CompoundPatterns\Interfaces\Quackable;
use App\CompoundPatterns\Quackologists\QuackCounter;

class DuckSimulator
{
    public function __construct()
    {
        $duckFactory = new CountingDuckFactory();
        $this->simulateDucks($duckFactory);
    }

    private function simulateDucks(AbstractDuckFactory $duckFactory)
    {
        $mallardDuck = $duckFactory->createMallardDuck();
        $redHeadDuck = $duckFactory->createRedHeadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = new QuackCounter(new GooseAdaptor(new Goose()));

        echo "Duck simulator: With Abstract Factory\n";

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
