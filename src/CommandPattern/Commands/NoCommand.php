<?php

namespace App\CommandPattern\Commands;

use App\CommandPattern\Commands\Command;

class NoCommand implements Command
{
    public function execute()
    {
        // do nothing
    }

    public function undo()
    {
        // do nothing
    }
}
