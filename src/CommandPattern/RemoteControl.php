<?php

namespace App\CommandPattern;

use App\CommandPattern\Commands\Command;
use App\CommandPattern\Commands\NoCommand;

class RemoteControl
{
    const COMMAND_NUM = 8;

    protected $onCommands = [];
    
    protected $offCommands = [];

    protected $undoCommand;

    public function __construct()
    {
        $noCommand = new NoCommand();
        for ($i = 0; $i < self::COMMAND_NUM; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
        $this->undoCommand = $noCommand;
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPressed(int $slot)
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPressed(int $slot)
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
    }
}
