<?php

namespace App\CompoundPatterns\Ducks;

use ArrayObject;
use App\CompoundPatterns\Interfaces\Observer;
use App\CompoundPatterns\Interfaces\Quackable;

class Flock implements Quackable
{
    protected ArrayObject $quackers;

    public function __construct()
    {
        $this->quackers = new ArrayObject([]);
    }

    public function add(Quackable $quacker)
    {
        $this->quackers->append($quacker);
    }

    public function quack()
    {
        for ($iterator = $this->quackers->getIterator(); $iterator->valid(); $iterator->next()) {
            $iterator->current()->quack();
        }
    }

    public function registerObserver(Observer $observer)
    {
        for ($iterator = $this->quackers->getIterator(); $iterator->valid(); $iterator->next()) {
            $iterator->current()->registerObserver($observer);
        }
    }

    public function notifyObservers()
    {
        // Each Quackable does its own notification, so Flock doesn't have to worry about it.
    }
}
