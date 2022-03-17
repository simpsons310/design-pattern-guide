<?php

namespace App\InterpreterPattern;

use App\InterpreterPattern\Expressions\Commands\FlyCommand;
use App\InterpreterPattern\Expressions\Commands\QuackCommand;
use App\InterpreterPattern\Expressions\Commands\RightCommand;
use App\InterpreterPattern\Expressions\Repetition;
use App\InterpreterPattern\Expressions\Sequence;
use App\InterpreterPattern\Expressions\Variable;

class DuckPondSimulator
{
    public function __construct()
    {
        // $command = 'right; while (daylight) fly; quack';
        $expression = new Sequence([
            new RightCommand(),
            new Repetition(new Variable('daylight'), new FlyCommand()),
            new QuackCommand()
        ]);
        $expression->interpreter([
            'daylight' => 5
        ]);
    }
}
