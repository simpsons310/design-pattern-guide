<?php

namespace App\InterpreterPattern\Expressions;

use App\InterpreterPattern\Interfaces\Expression;

class Variable implements Expression
{
    protected $variable;

    public function __construct(string $variable)
    {
        $this->variable = $variable;
    }

    public function interpreter($context)
    {
        return $context[$this->variable];
    }
}
