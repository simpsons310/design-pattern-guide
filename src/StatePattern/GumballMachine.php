<?php

namespace App\StatePattern;

use App\StatePattern\States\State;
use App\StatePattern\States\NoQuarterState;
use App\StatePattern\States\HasQuarterState;
use App\StatePattern\States\SoldOutState;
use App\StatePattern\States\SoldState;
use App\StatePattern\States\WinnerState;

class GumballMachine
{
    protected State $soldOutState;

    protected State $noQuarterState;

    protected State $hasQuarterState;

    protected State $soldState;

    protected State $winnerState;

    protected State $state;

    protected $count = 0;

    public function __construct(int $numberGumballs)
    {
        $this->count = $numberGumballs;
        $this->soldOutState = new SoldOutState($this);
        $this->soldState = new SoldState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->winnerState = new WinnerState($this);
        $this->state = $numberGumballs > 0
            ? $this->noQuarterState
            : $this->soldOutState;
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function releaseBall()
    {
        echo "A gumball comes rolling out the slot...\n";
        if ($this->count > 0) {
            $this->count--;
        }
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }

    public function getWinnerState()
    {
        return $this->winnerState;
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function __toString()
    {
        return "Machine remains " . $this->count . " gumball(s)\n";
    }
}
