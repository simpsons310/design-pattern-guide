<?php

namespace App\StatePattern\States;

use App\StatePattern\GumballMachine;

class SoldState extends State
{
    protected GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "Please wait, we’re already giving you a gumball\n";
    }

    public function ejectQuarter()
    {
        echo "Sorry, you already turned the crank\n";
    }

    public function turnCrank()
    {
        echo "Turning twice doesn’t get you another gumball!\n";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        $nextState = $this->gumballMachine->getCount() > 0
            ? $this->gumballMachine->getNoQuarterState()
            : $this->gumballMachine->getSoldOutState();
        $this->gumballMachine->setState($nextState);
    }
}
