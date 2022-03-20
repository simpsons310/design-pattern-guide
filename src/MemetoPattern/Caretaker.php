<?php

namespace App\MemetoPattern;

use App\MemetoPattern\Classes\Originator;

class Caretaker
{
    protected $memetos = [];

    protected $originator;

    public function __construct(Originator $originator)
    {
        $this->originator = $originator;
    }

    public function backup()
    {
        $this->memetos[] = $this->originator->save();
    }

    public function undo()
    {
        if (!count($this->memetos)) {
            return;
        }

        $memeto = array_pop($this->memetos);

        $this->originator->restore($memeto);
    }

    public function showHistory()
    {
        foreach ($this->memetos as $memeto) {
            echo $memeto->getName() . "\n";
        }
    }
}
