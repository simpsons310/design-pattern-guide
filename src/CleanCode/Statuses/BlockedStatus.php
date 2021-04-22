<?php

namespace App\CleanCode\Statuses;

use App\CleanCode\RequestStatusInterface;

class BlockedStatus implements RequestStatusInterface
{
    const STATUS_CODE = 3;

    const CAN_UPDATE_STATUSES = [
        'PENDING' => 2
    ];

    public function canUpdateStatus($status)
    {
        if (!in_array($status, array_values(self::CAN_UPDATE_STATUSES))) {
            return false;
        }
        return true;
    }

    public function sendMail()
    {
        echo "Sent mail approve!\n";
    }
}
