<?php

namespace App\TemplatePattern;

use App\TemplatePattern\Beverages\Tea;
use App\TemplatePattern\Beverages\Coffee;

class BeverageDriveTest
{
    public function __construct()
    {
        $tea = new Tea();
        $coffee = new Coffee();

        echo "Making tea...\n";
        $tea->prepareRecipe();
        echo "\n";

        echo "Making coffee...\n";
        $coffee->prepareRecipe();
        echo "\n";
    }
}
