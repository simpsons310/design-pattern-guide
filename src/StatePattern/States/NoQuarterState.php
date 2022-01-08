<?php

namespace App\StatePattern\States;

use App\StatePattern\GumballMachine;

class NoQuarterState extends State
{
    protected GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You inserted a quarter\n";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo "You haven't inserted a quarter\n";
    }

    public function turnCrank()
    {
        echo "You turned but there's no quarter\n";
    }

    public function dispense()
    {
        echo "You need pay first\n";
    }
}
