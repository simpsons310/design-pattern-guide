<?php

namespace App\IteratorPattern\Menus;

use App\IteratorPattern\Interfaces\Menu;
use App\IteratorPattern\Menus\MenuItem;
use App\IteratorPattern\Iterators\PancakeHouseMenuIterator;

class PancakeHouseMenu implements Menu
{
    protected $menuItems = [];

    public function __construct()
    {
        $this->addItem('K&B’s Pancake Breakfast', 'Pancakes with scrambled eggs, and toast', true, 2.99);
        $this->addItem('Regular Pancake Breakfast', 'Pancakes with fried eggs, sausage', false, 2.99);
        $this->addItem('Blueberry Pancakes', 'Pancakes made with fresh blueberries', true, 3.49);
        $this->addItem('Waffles', 'Waffles, with your choice of blueberries or strawberries', true, 3.59);
    }

    public function createIterator()
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }

    protected function addItem(string $name, string $description, $vegetarian, $price)
    {
        $this->menuItems[] = new MenuItem($name, $description, $vegetarian, $price);
    }

    public function getMenuItem()
    {
        return $this->menuItems;
    }
}
