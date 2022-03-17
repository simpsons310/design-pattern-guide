<?php

namespace App\InterpreterPattern\Expressions\Commands;

use App\InterpreterPattern\Interfaces\Expression;

class RightCommand implements Expression
{
    public function interpreter($context)
    {
        echo "The duck is turning right\n";
    }
}
