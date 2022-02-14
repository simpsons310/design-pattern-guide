<?php

namespace App\CompoundPatterns\Interfaces;

interface Quackable extends QuackObservable
{
    public function quack();
}
