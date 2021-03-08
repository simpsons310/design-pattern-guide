<?php

namespace App\StrategyPattern\Characters;

use App\StrategyPattern\Interfaces\WeaponBehaviorInterface;

abstract class Character
{
    protected $weaponBehavior;

    public function __construct(
        WeaponBehaviorInterface $weaponBehavior
    ) {
        $this->weaponBehavior = $weaponBehavior;
    }

    abstract public function display();

    public function fight()
    {
        $this->weaponBehavior->fight();
    }

    public function setWeapon(WeaponBehaviorInterface $weaponBehavior)
    {
        $this->weaponBehavior = $weaponBehavior;
    }
}