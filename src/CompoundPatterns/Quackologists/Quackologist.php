<?php

namespace App\CompoundPatterns\Quackologists;

use ReflectionClass;
use App\CompoundPatterns\Interfaces\Observer;
use App\CompoundPatterns\Interfaces\QuackObservable;

class Quackologist implements Observer
{
    public function update(QuackObservable $duck)
    {
        $className = (new ReflectionClass($duck))->getShortName();
        $words = preg_split('/(?=[A-Z])/', $className);
        $className = implode(" ", $words);
        echo "Quackologist:" . $className . " just quacked.\n";
    }
}
