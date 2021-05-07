<?php

namespace App\DecoratorPattern;

interface BeverageInterface
{
    public function cost();

    public function getDescription();

    public function getSize();
}
