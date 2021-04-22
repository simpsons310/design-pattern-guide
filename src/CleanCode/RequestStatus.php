<?php

namespace App\CleanCode;

use App\CleanCode\RequestStatusInterface;

class RequestStatus
{
    const APPROVED = 1;
    const PENDING = 2;
    const BLOCKED = 0;

    public function __construct($status)
    {
        $this->status = $status;
    }
 
    public function updateStatus($status) {
        if ($this->status == self::APPROVED) {
            if ($status == self::BLOCKED) {
                $this->status = $status;
                $this->save();
                // TODO Send mail block
            } else {
                return 'Update fail';
            }
        } elseif ($this->status == self::PENDING) {
            if ($status == self::APPROVED) {
                $this->status = $status;
                $this->save();
                // TODO send mail Approve
            } else {
                return 'Update fail';
            }
        } elseif ($this->status == self::BLOCKED) {
            if ($status == self::PENDING) {
                $this->status = $status;
                $this->save();
                // TOTO send mail unblock
            } else {
                return 'Update fail';
            }
        }
    }

    private function save()
    {
        echo 'Saved!';
    }
}
