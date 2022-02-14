<?php

namespace App\CompoundPatterns\Interfaces;

interface QuackObservable
{
    public function registerObserver(Observer $observer);

    public function notifyObservers();
}
