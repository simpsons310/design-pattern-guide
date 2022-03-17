<?php

namespace App\InterpreterPattern\Expressions\Commands;

use App\InterpreterPattern\Interfaces\Expression;

class FlyCommand implements Expression
{
    public function interpreter($context)
    {
        echo "The duck is flying\n";
    }
}
