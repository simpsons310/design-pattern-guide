<?php

namespace App\CleanCode\Statuses;

use App\CleanCode\RequestStatusInterface;

class PendingStatus implements RequestStatusInterface
{
    const STATUS_CODE = 2;

    const CAN_UPDATE_STATUSES = [
        'APPROVED' => 1
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
