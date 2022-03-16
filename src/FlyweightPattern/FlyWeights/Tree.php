<?php

namespace App\FlyweightPattern\FlyWeights;

class Tree
{
    protected $x;

    protected $y;

    protected $age;

    public function __construct($x, $y, $age)
    {
        $this->x = $x;
        $this->y = $y;
        $this->age = $age;
    }

    public function display()
    {
        echo "A " . $this->age . "-year-old tree at coordinates (" . $this->x . "," . $this->y . ")\n";
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getRadius()
    {
        return ceil($this->age / 10 / 2);
    }
}
