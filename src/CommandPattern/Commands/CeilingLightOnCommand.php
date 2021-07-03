<?php

namespace App\CommandPattern\Commands;

use App\CommandPattern\Commands\Command;
use App\CommandPattern\Devices\CeilingLight;

class CeilingLightOnCommand implements Command
{
    protected $ceilingLight;

    protected $prevMode;

    public function __construct(CeilingLight $ceilingLight)
    {
        $this->ceilingLight = $ceilingLight;
    }

    public function execute()
    {
        $this->prevMode = $this->ceilingLight->getMode();
        $this->ceilingLight->on();
    }

    public function undo()
    {
        if ($this->prevMode == $this->ceilingLight::ON) {
            $this->ceilingLight->on();
        } elseif ($this->prevMode == $this->ceilingLight::OFF) {
            $this->ceilingLight->off();
        } elseif ($this->prevMode == $this->ceilingLight::DIM) {
            $this->ceilingLight->dim();
        }
    }
}
