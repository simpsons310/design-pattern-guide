<?php

namespace App\CompoundPatterns\Quackologists;

use App\CompoundPatterns\Interfaces\Observer;
use App\CompoundPatterns\Interfaces\Quackable;

class QuackCounter implements Quackable
{
    protected Quackable $duck;

    protected static int $numberOfQuack = 0;

    public function __construct(Quackable $duck)
    {
        $this->duck = $duck;
    }

    public function quack()
    {
        $this->duck->quack();
        static::$numberOfQuack++;
    }

    public static function getQuacks()
    {
        return static::$numberOfQuack;
    }

    public function registerObserver(Observer $observer)
    {
        $this->duck->registerObserver($observer);
    }

    public function notifyObservers()
    {
        $this->duck->notifyObservers();
    }
}
