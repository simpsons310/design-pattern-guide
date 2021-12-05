<?php

namespace App\IteratorPattern;

use App\IteratorPattern\Menus\DinerMenu;
use App\IteratorPattern\Menus\PancakeHouseMenu;
use App\IteratorPattern\Menus\CafeMenu;
use App\IteratorPattern\Waitress;

class MenuTestDrive
{
    public function __construct()
    {
        $dinerMenu = new DinerMenu();
        $pancakeHouseMenu = new PancakeHouseMenu();
        $cafeMenu = new CafeMenu();

        $waitress = new Waitress($dinerMenu, $pancakeHouseMenu, $cafeMenu);

        $waitress->printMenu();
    }
}
