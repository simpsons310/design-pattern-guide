<?php

namespace App\CommandPattern\Commands;

use App\CommandPattern\Commands\Command;
use App\CommandPattern\Devices\CeilingFan;

class CeilingFanOnLowCommand implements Command
{
    protected $ceilingFan;

    protected $prevSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute()
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->low();
    }

    public function undo()
    {
        if ($this->prevSpeed == $this->ceilingFan::HIGH) {
            $this->ceilingFan->high();
        } elseif ($this->prevSpeed == $this->ceilingFan::MEDIUM) {
            $this->ceilingFan->medium();
        } elseif ($this->prevSpeed == $this->ceilingFan::LOW) {
            $this->ceilingFan->low();
        } elseif ($this->prevSpeed == $this->ceilingFan::OFF) {
            $this->ceilingFan->off();
        }
    }
}
