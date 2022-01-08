<?php

namespace App\CompositePattern\Menu;

use App\CompositePattern\UnsupportedOperationException;

abstract class MenuComponent
{
    public function add(MenuComponent $menuComponent): void
    {
        throw new UnsupportedOperationException();
    }

    public function remove(MenuComponent $menuComponent): void
    {
        throw new UnsupportedOperationException();
    }

    public function getChild($i): MenuComponent
    {
        throw new UnsupportedOperationException();
    }

    public function getName(): string
    {
        throw new UnsupportedOperationException();
    }

    public function getDescription(): string
    {
        throw new UnsupportedOperationException();
    }

    public function getPrice(): float
    {
        throw new UnsupportedOperationException();
    }

    public function isVegetarian(): bool
    {
        throw new UnsupportedOperationException();
    }

    public function createIterator()
    {
        throw new UnsupportedOperationException();
    }

    abstract public function print(): void;
}
