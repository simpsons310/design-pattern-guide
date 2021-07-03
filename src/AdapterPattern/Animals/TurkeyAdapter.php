<?php

namespace App\AdapterPattern\Animals;

use App\AdapterPattern\Interfaces\Duck;
use App\AdapterPattern\Interfaces\Turkey;

class TurkeyAdapter implements Duck
{
    protected $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
