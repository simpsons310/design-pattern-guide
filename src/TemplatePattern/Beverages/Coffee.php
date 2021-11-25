<?php

namespace App\TemplatePattern\Beverages;

use App\TemplatePattern\Beverages\CaffeinBeverage;

class Coffee extends CaffeinBeverage
{
    public function brew()
    {
        echo "Dripping Coffee through filter\n";
    }

    public function addCondiments()
    {
        echo "Adding Sugar and Milk\n";
    }

    public function customerWantsCondiments(): bool
    {
        $answer = $this->getUserInput();

        if (substr(strtolower($answer), 0, 1) === 'y') {
            return true;
        } else {
            return false;
        }
    }

    private function getUserInput()
    {
        $answer = readline('Would you like milk and sugar with your coffee (y/n)? ');
        if (!$answer) {
            return 'no';
        }
        return $answer;
    }
}
