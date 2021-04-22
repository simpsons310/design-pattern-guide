<?php

namespace App\ObserverPattern\Interfaces;

use Observer;

interface Subject
{
    public function registerObserver(Observer $observer);

    public function removeObserver(Observer $observer);

    public function notifyObserver();
}
