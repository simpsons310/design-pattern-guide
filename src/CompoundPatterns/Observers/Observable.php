<?php

namespace App\CompoundPatterns\Observers;

use ArrayObject;
use App\CompoundPatterns\Interfaces\Observer;
use App\CompoundPatterns\Interfaces\QuackObservable;

class Observable implements QuackObservable
{
    protected $observers;

    protected QuackObservable $duck;

    public function __construct(QuackObservable $duck)
    {
        $this->duck = $duck;
        $this->observers = new ArrayObject([]);
    }

    public function registerObserver(Observer $observer)
    {
        $this->observers->append($observer);
    }

    public function notifyObservers()
    {
        for ($iterator = $this->observers->getIterator(); $iterator->valid(); $iterator->next()) {
            $iterator->current()->update($this->duck);
        }
    }
}
