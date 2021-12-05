<?php

namespace App\IteratorPattern\Menus;

use App\IteratorPattern\Interfaces\Menu;
use App\IteratorPattern\Menus\MenuItem;
use App\IteratorPattern\Iterators\CafeMenuIterator;

class CafeMenu implements Menu
{
    protected $menuItems = [];

    public function __construct()
    {
        $this->addItem('Veggie Burger and Air Fries', 'Veggie burger on a whole wheat bun, lettuce, tomato, and fries', true, 3.99);
        $this->addItem('Soup of the day', 'A cup of the soup of the day, with a side salad', false, 3.69);
        $this->addItem('Burrito', 'A large burrito, with whole pinto beans, salsa, guacamole', true, 4.29);
    }

    public function createIterator()
    {
        return new CafeMenuIterator($this->menuItems);
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