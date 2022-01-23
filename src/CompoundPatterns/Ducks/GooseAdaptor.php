<?php

namespace App\CompoundPatterns\Ducks;

use App\CompoundPatterns\Geese\Goose;
use App\CompoundPatterns\Interfaces\Quackable;

class GooseAdaptor implements Quackable
{
    protected Goose $goose;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
    }

    public function quack()
    {
        $this->goose->honk();
    }
}
