<?php

namespace App\CommandPattern\Commands;

use App\CommandPattern\Commands\Command;
use App\CommandPattern\Devices\Light;

class LightOffCommand implements Command
{
    protected $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}
