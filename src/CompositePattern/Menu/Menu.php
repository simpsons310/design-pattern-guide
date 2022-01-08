<?php

namespace App\CompositePattern\Menu;

use App\CompositePattern\Iterators\MenuIterator;
use App\CompositePattern\Iterators\CompositeIterator;

class Menu extends MenuComponent
{
    private $menuComponents;

    private string $name;

    private string $description;

    private $iterator = null;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
        $this->menuComponents = new MenuIterator();
    }

    public function createIterator()
    {
        if ($this->iterator == null) {
            $this->iterator = new CompositeIterator($this->menuComponents);
        }
        return $this->iterator;
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponents->add($menuComponent);
    }

    public function remove(MenuComponent $menuComponent): void
    {
        $this->menuComponents->remove($menuComponent);
    }

    public function getChild($i): MenuComponent
    {
        return $this->menuComponents->get($i);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function print(): void
    {
        echo "\n" . $this->getName();
        echo ", " . $this->getDescription();
        echo "\n--------------------\n";

        while ($this->menuComponents->hasNext()) {
            $menuComponent = $this->menuComponents->next();
            $menuComponent->print();
        }
    }
}
