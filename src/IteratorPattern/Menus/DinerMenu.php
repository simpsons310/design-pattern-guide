<?php

namespace App\IteratorPattern\Menus;

use App\IteratorPattern\Interfaces\Menu;
use App\IteratorPattern\Menus\MenuItem;
use App\IteratorPattern\Iterators\DinerMenuIterator;

class DinerMenu implements Menu
{
    protected $menuItems = [];

    public function __construct()
    {
        $this->addItem('Vegetarian BLT', '(Fakin’) Bacon with lettuce & tomato on whole wheat', true, 2.99);
        $this->addItem('RBLT', 'Bacon with lettuce & tomato on whole wheat', false, 2.99);
        $this->addItem('Soup of the day', 'Soup of the day, with a side of potato salad', true, 3.29);
        $this->addItem('Hotdog', 'A hot dog, with saurkraut, relish, onions, topped with cheese', true, 3.05);
    }

    public function createIterator()
    {
        return new DinerMenuIterator($this->menuItems);
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
