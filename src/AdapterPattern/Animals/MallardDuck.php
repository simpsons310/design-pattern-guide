<?php

namespace App\AdapterPattern\Animals;

use App\AdapterPattern\Interfaces\Duck;

class MallardDuck implements Duck
{
    public function quack()
    {
        echo "Quack\n";
    }

    public function fly()
    {
        echo "Flying\n";
    }
}
