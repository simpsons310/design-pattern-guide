<?php

namespace App\CompoundPatterns\Ducks;

use App\CompoundPatterns\Observers\Observable;
use App\CompoundPatterns\Interfaces\Observer;
use App\CompoundPatterns\Interfaces\Quackable;

class MallardDuck implements Quackable
{
    protected $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function quack()
    {
        echo "Quack!\n";
        $this->notifyObservers();
    }

    public function registerObserver(Observer $observer)
    {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers()
    {
        $this->observable->notifyObservers();
    }
}
