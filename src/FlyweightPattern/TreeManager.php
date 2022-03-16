<?php

namespace App\FlyweightPattern;

use App\FlyweightPattern\Factories\TreeFactory;

class TreeManager
{
    public function __construct()
    {
        $manager = new TreeFactory([
            [0, 1, 10],
            [5, 10, 20],
            [0, 7, 30],
            [5, 9, 10],
            [17, 5, 15],
            [6, 6, 27],
            [6, 1, 27],
        ]);

        echo "Listing all trees:\n";
        $manager->displayTrees();
    }
}
