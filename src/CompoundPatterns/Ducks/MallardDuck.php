<?php

namespace App\CompoundPatterns\Ducks;

use App\CompoundPatterns\Interfaces\Quackable;

class MallardDuck implements Quackable
{
    public function quack()
    {
        echo "Quack!\n";
    }
}
