<?php

namespace App\StatePattern\States;

use App\StatePattern\GumballMachine;

class SoldOutState extends State
{
    protected GumballMachine $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You cannot insert a quarter, the machine is sold out\n";
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
        echo "No gumball dispense\n";
    }
}
