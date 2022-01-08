<?php

namespace App\StatePattern\States;

use App\StatePattern\GumballMachine;

class HasQuarterState extends State
{
    protected GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You can not insert another quarter\n";
    }

    public function ejectQuarter()
    {
        echo "Quarter returned\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo "You turned...\n";
        if ($this->isWinner(10) && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense()
    {
        echo "No gumball dispense\n";
    }

    public function isWinner($rate = 50)
    {
        return boolval(rand(0, 100) > $rate);
    }
}
