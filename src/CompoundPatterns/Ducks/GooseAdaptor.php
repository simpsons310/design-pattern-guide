<?php

namespace App\CompoundPatterns\Ducks;

use App\CompoundPatterns\Geese\Goose;
use App\CompoundPatterns\Observers\Observable;
use App\CompoundPatterns\Interfaces\Quackable;
use App\CompoundPatterns\Interfaces\Observer;

class GooseAdaptor implements Quackable
{
    protected Goose $goose;

    protected $observable;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
        $this->observable = new Observable($this);
    }

    public function quack()
    {
        $this->goose->honk();
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
