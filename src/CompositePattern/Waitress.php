<?php

namespace App\CompositePattern;

use App\CompositePattern\Menu\MenuComponent;
use App\CompositePattern\UnsupportedOperationException;

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

    public function printVegetarianMenu()
    {
        $iterator = $this->allMenus->createIterator();
        echo "\n VEGETARIAN MENU\------";
        while ($iterator->hasNext()) {
            $menuComponent = $iterator->next();
            try {
                if ($menuComponent->isVegetarian()) {
                    $menuComponent->print();
                }
            } catch (UnsupportedOperationException $exception) {
                //
            }
        }
    }
}
