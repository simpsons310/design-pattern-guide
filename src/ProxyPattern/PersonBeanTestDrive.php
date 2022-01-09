<?php

namespace App\ProxyPattern;

use App\ProxyPattern\Proxies\PersonBeanProxy;
use Exception;

class PersonBeanTestDrive
{
    public function __construct()
    {
        try {
            $owner = new PersonBeanProxy('Joe', 'male', 'sing', true);
            $owner->printInfo();
            $owner->setInterests('soccer');
            $owner->setHotOrNotRating(10);
        } catch (Exception $exception) {
            echo $exception->getMessage() . "\n";
        }

        try {
            $owner = new PersonBeanProxy('Joe', 'male', 'sing', false);
            $owner->printInfo();
            $owner->setHotOrNotRating(5);
            $owner->setInterests('soccer');
        } catch (Exception $exception) {
            echo $exception->getMessage() . "\n";
        }
    }
}
