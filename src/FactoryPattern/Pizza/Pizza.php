<?php

namespace App\FactoryPattern\Pizza;

abstract class Pizza
{
    protected $name;

    protected $dough;

    protected $sauce;

    protected $veggies;

    protected $cheese;

    protected $pepperoni;

    protected $clam;

    abstract public function prepare();

    public function bake()
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function display()
    {
        echo "Preparing " . $this->name . "\n";
        echo "Tossing " . $this->dough->get() . "\n";
        echo "Adding " . $this->sauce->get() . "\n";
        echo "Adding " . $this->cheese->get() . "\n";
        if ($this->clam) {
            echo "Adding " . $this->clam->get() . "\n";
        }
        if ($this->pepperoni) {
            echo "Adding " . $this->pepperoni->get() . "\n";
        }
        if ($this->veggies) {
            $veggies = $this->veggies;
            echo "Adding ";

            foreach ($veggies as $veggie) {
                echo $veggie->get() . ", ";
            }
            echo "\n";
        }
    }
}
