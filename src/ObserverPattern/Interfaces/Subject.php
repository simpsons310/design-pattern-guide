<?php

namespace App\ObserverPattern\Interfaces;

use App\ObserverPattern\Interfaces\Observer;

interface Subject
{
    public function registerObserver(Observer $observer);

    public function removeObserver(Observer $observer);

    public function notifyObservers();
}
