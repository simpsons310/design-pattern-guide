<?php

namespace App\CleanCode\Statuses;

use App\CleanCode\RequestStatusInterface;

class ApproveStatus implements RequestStatusInterface
{
    const STATUS_CODE = 1;

    const CAN_UPDATE_STATUSES = [
        'BLOCKED' => 0,
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
        echo "Sent mail block!\n";
    }
}
