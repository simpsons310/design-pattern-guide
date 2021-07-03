<?php

namespace App\AdapterPattern\Animals;

use App\AdapterPattern\Interfaces\Turkey;

class WildTurkey implements Turkey
{
    public function gobble()
    {
        echo "Gobble gobble\n";
    }

    public function fly()
    {
        echo "Flying a short distance\n";
    }
}
