<?php

namespace App\MemetoPattern\Classes;

use App\MemetoPattern\Classes\Memeto;

class Originator
{
    protected $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        echo "Originator: My state is " . $this->state . "\n";
    }

    public function newState()
    {
        $this->state = $this->generateRandomString();
    }

    protected function generateRandomString(int $length = 10)
    {
        return substr(
            str_shuffle(
                str_repeat(
                    $x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    ceil($length / strlen($x))
                )
            ),
            1,
            $length,
        );
    }

    public function save()
    {
        return new Memeto($this->state);
    }

    public function restore(Memeto $memeto)
    {
        $this->state = $memeto->getState();
    }
}
