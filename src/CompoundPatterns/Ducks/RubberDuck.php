<?php

namespace App\CompoundPatterns\Ducks;

use App\CompoundPatterns\Interfaces\Quackable;

class RubberDuck implements Quackable
{
    public function quack()
    {
        echo "Squeak!\n";
    }
}
