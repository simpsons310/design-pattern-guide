<?php

namespace App\CommandPattern\Commands;

interface Command
{
    public function execute();

    public function undo();
}
