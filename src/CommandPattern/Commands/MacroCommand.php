<?php

namespace App\CommandPattern\Commands;

use App\CommandPattern\Commands\Command;
use App\CommandPattern\Devices\TV;

class MacroCommand implements Command
{
    protected $commands = [];

    public function __construct($commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo()
    {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }
}
