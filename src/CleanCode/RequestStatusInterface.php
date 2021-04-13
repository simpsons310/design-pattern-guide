<?php

namespace App\CleanCode;

interface RequestStatusInterface
{
    public function canUpdateStatus($status);

    public function sendMail();
}
