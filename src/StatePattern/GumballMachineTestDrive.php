<?php

namespace App\StatePattern;

use App\StatePattern\GumballMachine;

class GumballMachineTestDrive
{
    protected GumballMachine $gumballMachine;

    public function __construct()
    {
        $this->gumballMachine = new GumballMachine(5);

        echo $this->gumballMachine;

        $this->gumballMachine->insertQuarter();
        $this->gumballMachine->turnCrank();

        echo $this->gumballMachine;

        $this->gumballMachine->ejectQuarter();
        $this->gumballMachine->insertQuarter();
        $this->gumballMachine->ejectQuarter();
        $this->gumballMachine->turnCrank();
        $this->gumballMachine->turnCrank();

        $this->gumballMachine->insertQuarter();
        $this->gumballMachine->turnCrank();

        $this->gumballMachine->insertQuarter();
        $this->gumballMachine->turnCrank();

        $this->gumballMachine->insertQuarter();
        $this->gumballMachine->turnCrank();

        echo $this->gumballMachine;
    }
}
