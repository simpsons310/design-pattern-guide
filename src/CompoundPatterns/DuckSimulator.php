<?php

namespace App\CompoundPatterns;

use App\CompoundPatterns\Ducks\Flock;
use App\CompoundPatterns\Ducks\GooseAdaptor;
use App\CompoundPatterns\Factories\AbstractDuckFactory;
use App\CompoundPatterns\Factories\CountingDuckFactory;
use App\CompoundPatterns\Geese\Goose;
use App\CompoundPatterns\Interfaces\Quackable;
use App\CompoundPatterns\Quackologists\QuackCounter;
use App\CompoundPatterns\Quackologists\Quackologist;

class DuckSimulator
{
    public function __construct()
    {
        $duckFactory = new CountingDuckFactory();
        $this->simulateDucks($duckFactory);
        echo "-----------------------------\n";
        $this->simulateFlockOfDucks($duckFactory);
        echo "-----------------------------\n";
        $this->simulateWithObserver($duckFactory);
        echo "-----------------------------\n";
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

    private function simulateFlockOfDucks(AbstractDuckFactory $duckFactory)
    {
        $redHeadDuck = $duckFactory->createRedHeadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = new QuackCounter(new GooseAdaptor(new Goose()));

        echo "Duck simulator: With Composite - Flocks\n";

        $flockOfDucks = new Flock();

        $flockOfDucks->add($redHeadDuck);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($gooseDuck);

        $flockOfMallards = new Flock();

        $mallardOne = $duckFactory->createMallardDuck();
        $mallardTwo = $duckFactory->createMallardDuck();
        $mallardThree = $duckFactory->createMallardDuck();
        $mallardFour = $duckFactory->createMallardDuck();

        $flockOfMallards->add($mallardOne);
        $flockOfMallards->add($mallardTwo);
        $flockOfMallards->add($mallardThree);
        $flockOfMallards->add($mallardFour);

        echo "Duck simulator: Whole Flock Simulation\n";
        $this->simulate($flockOfDucks);

        echo "Duck simulator: Mallard Flock Simulator\n";
        $this->simulate($flockOfMallards);

        echo "The ducks quacked " . QuackCounter::getQuacks() . " times\n";
    }

    public function simulateWithObserver(AbstractDuckFactory $duckFactory)
    {
        $mallardDuck = $duckFactory->createMallardDuck();
        $redHeadDuck = $duckFactory->createRedHeadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = new QuackCounter(new GooseAdaptor(new Goose()));
        $flockOfDucks = new Flock();

        $flockOfDucks->add($mallardDuck);
        $flockOfDucks->add($redHeadDuck);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($gooseDuck);

        $quackologist = new Quackologist();
        $flockOfDucks->registerObserver($quackologist);

        echo "Duck simulator: With Observer\n";
        $this->simulate($flockOfDucks);

        echo "The ducks quacked " . QuackCounter::getQuacks() . " times\n";
    }

    private function simulate(Quackable $duck)
    {
        $duck->quack();
    }
}
