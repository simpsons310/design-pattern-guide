<?php

namespace App\CompositePattern\Menu;

use App\CompositePattern\Iterators\NullIterator;

class MenuItem extends MenuComponent
{
    private string $name;

    private string $description;

    private bool $vegetarian;

    private float $price;

    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function createIterator()
    {
        return new NullIterator();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function print(): void
    {
        echo "    " . $this->getName();
        if ($this->isVegetarian()) {
            echo "(v)";
        }
        echo ", " . $this->getPrice();
        echo " -- " . $this->getDescription() . "\n";
    }
}
