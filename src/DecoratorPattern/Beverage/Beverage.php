<?php

namespace App\DecoratorPattern\Beverage;

use App\DecoratorPattern\BeverageInterface;

class Beverage implements BeverageInterface
{
    protected $description = '';

    protected $size = null;

    public function cost()
    {
        return 0;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
}
