<?php

namespace App\MemetoPattern;

use App\MemetoPattern\Classes\Originator;

class MemetoTestDriven
{
    public function __construct()
    {
        $originator = new Originator('test-estt-tset-ttes-ttes-sett');
        $caretaker = new Caretaker($originator);

        echo "Original State:\n";
        $originator->getState();

        echo "New State:\n";
        $caretaker->backup();
        $originator->newState();
        $originator->getState();

        echo "New State:\n";
        $caretaker->backup();
        $originator->newState();
        $originator->getState();

        echo "State history:\n";
        $caretaker->showHistory();

        echo "Undo State:\n";
        $caretaker->undo();
        $originator->getState();

        echo "Undo State 2nd:\n";
        $caretaker->undo();
        $originator->getState();
    }
}
