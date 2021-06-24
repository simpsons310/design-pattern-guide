<?php

namespace App\SingletonPattern;

use App\SingletonPattern\ChocolateBoiler;

class ChocolateFactory
{
    public function __construct()
    {
        // 2 instance got but is same boiler
        $boiler1 = ChocolateBoiler::getInstance();
        $boiler2 = ChocolateBoiler::getInstance();

        $boiler1->fill();
        $boiler2->fill();

        $boiler1->boil();
        $boiler2->boil();

        $boiler1->drain();
        $boiler2->drain();
    }
}
