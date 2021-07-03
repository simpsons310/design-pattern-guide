<?php

namespace App\AdapterPattern;

use App\AdapterPattern\Animals\MallardDuck;
use App\AdapterPattern\Animals\WildTurkey;
use App\AdapterPattern\Animals\TurkeyAdapter;

class DuckTestDrive
{
    public function __construct()
    {
        $mallardDuck = new MallardDuck();
        $wildTurkey = new WildTurkey();
        $turkeyAdapter = new TurkeyAdapter($wildTurkey);

        echo "The turkey says...\n";
        $wildTurkey->gobble();
        $wildTurkey->fly();

        echo "The Duck says...\n";
        $mallardDuck->quack();
        $mallardDuck->fly();

        echo "The Turkey Adapter says...\n";
        $turkeyAdapter->quack();
        $turkeyAdapter->fly();
    }
}
