<?php

namespace App\CompositePattern;

use App\CompositePattern\Menu\MenuComponent;

class Waitress
{
    protected MenuComponent $allMenus;

    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu()
    {
        $this->allMenus->print();
    }
}
