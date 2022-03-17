<?php

namespace App\InterpreterPattern\Interfaces;

interface Expression
{
    public function interpreter($context);
}
