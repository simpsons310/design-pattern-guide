<?php

namespace App\InterpreterPattern\Expressions;

use App\InterpreterPattern\Interfaces\Expression;

class Sequence implements Expression
{
    protected $expressions;

    public function __construct(array $expressions)
    {
        $this->expressions = $expressions;
    }

    public function interpreter($context)
    {
        foreach ($this->expressions as $expression) {
            $expression->interpreter($context);
        }
    }
}
