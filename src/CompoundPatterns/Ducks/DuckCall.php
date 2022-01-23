<?php

namespace App\CompoundPatterns\Ducks;

use App\CompoundPatterns\Interfaces\Quackable;

class DuckCall implements Quackable
{
    public function quack()
    {
        echo "Kwak!\n";
    }
}
