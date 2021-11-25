<?php

namespace App\TemplatePattern\Beverages;

use App\TemplatePattern\Beverages\CaffeinBeverage;

class Tea extends CaffeinBeverage
{
    public function brew()
    {
        echo "Steeping the tea\n";
    }

    public function addCondiments()
    {
        echo "Adding lemon\n";
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
        $answer = readline('Would you like lemon with your tea (y/n)? ');
        if (!$answer) {
            return 'no';
        }
        return $answer;
    }
}
