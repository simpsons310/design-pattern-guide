<?php

namespace App\CompoundPatterns\Interfaces;

interface Observer
{
    public function update(QuackObservable $duck);
}
