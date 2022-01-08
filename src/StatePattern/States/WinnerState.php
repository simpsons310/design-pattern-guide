<?php

namespace App\StatePattern\States;

use App\StatePattern\GumballMachine;

class WinnerState extends State
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
        echo "You haven't inserted a quarter\n";
    }

    public function turnCrank()
    {
        echo "Turning twice doesn’t get you another gumball!\n";
    }

    public function dispense()
    {
        echo "“YOU’RE A WINNER! You get two gumballs for your quarter\n";
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() == 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }
}
