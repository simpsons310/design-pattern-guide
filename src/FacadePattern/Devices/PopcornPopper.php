<?php

namespace App\FacadePattern\Devices;

class PopcornPopper
{
    public function on()
    {
        echo "Popcorn Popper on\n";
    }

    public function off()
    {
        echo "Popcorn Popper off\n";
    }

    public function pop()
    {
        echo "Popcorn Popper popping popcorn!\n";
    }
}
