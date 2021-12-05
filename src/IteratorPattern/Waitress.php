<?php

namespace App\IteratorPattern;

use App\IteratorPattern\Interfaces\Iterator;
use App\IteratorPattern\Menus\DinerMenu;
use App\IteratorPattern\Menus\PancakeHouseMenu;;
use App\IteratorPattern\Menus\CafeMenu;

class Waitress
{
    protected DinerMenu $dinerMenu;

    protected PancakeHouseMenu $pancakeHouseMenu;

    protected CafeMenu $cafeMenu;

    public function __construct(
        DinerMenu $dinerMenu,
        PancakeHouseMenu $pancakeHouseMenu,
        CafeMenu $cafeMenu 
    ) {
        $this->dinerMenu = $dinerMenu;
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->cafeMenu = $cafeMenu;
    }

    public function printMenu()
    {
        $pancakeHouseIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator = $this->dinerMenu->createIterator();
        $cafeIterator = $this->cafeMenu->createIterator();


        echo "BREAKFAST\n";
        $this->printIteratorMenu($pancakeHouseIterator);
        echo "LUNCH\n";
        $this->printIteratorMenu($dinerIterator);
        echo "DINER\n";
        $this->printIteratorMenu($cafeIterator);
    }

    private function printIteratorMenu(Iterator $iterator)
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            echo $menuItem->getName() . ', ' . $menuItem->getPrice() . ' -- ' . $menuItem->getDescription() . "\n";
        }
    }
}
