<?php

namespace App\InterpreterPattern\Expressions;

use App\InterpreterPattern\Interfaces\Expression;

class Repetition implements Expression
{
    protected $variable;

    protected $expression;

    public function __construct(Expression $variable, Expression $expression)
    {
        $this->variable = $variable;
        $this->expression = $expression;
    }

    public function interpreter($context)
    {
        for ($i = 0; $i < $this->variable->interpreter($context); $i++) {
            $this->expression->interpreter($context);
        }
    }
}
