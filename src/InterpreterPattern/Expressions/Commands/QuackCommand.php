<?php

namespace App\InterpreterPattern\Expressions\Commands;

use App\InterpreterPattern\Interfaces\Expression;

class QuackCommand implements Expression
{
    public function interpreter($context)
    {
        echo "The duck is quacking\n";
    }
}
