<?php

namespace App\CompositePattern\Menu;

class Menu extends MenuComponent
{
    private array $menuComponents = [];

    private string $name;

    private string $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent): void
    {
        $length = count($this->menuComponents);
        for ($i = 0; $i < $length; $i++) {
            if (
                $this->menuComponents[$i]->getName() == $menuComponent->getName() &&
                $this->menuComponents[$i]->getDescription() == $menuComponent->getDescription()
            ) {
                unset($this->menuComponents[$i]);
            }
        }
    }

    public function getChild($i): MenuComponent
    {
        return $this->menuComponents[$i];
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

        foreach ($this->menuComponents as $menuComponent) {
            $menuComponent->print();
        }
    }
}
