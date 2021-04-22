<?php

namespace App\CleanCode;

class RequestStatusRefactored
{
    public function __construct(RequestStatusInterface $requestStatusInterface)
    {
        $this->requestStatusInterface = $requestStatusInterface;
        $this->status = $requestStatusInterface::STATUS_CODE;
    }
    
    public function updateStatus($status)
    {
        if (!$this->requestStatusInterface->canUpdateStatus($status)) {
            return "Update fail\n";
        }
        $this->status = $this->requestStatusInterface::STATUS_CODE;
        $this->save();
        $this->requestStatusInterface->sendMail();
    }

    private function save()
    {
        echo "Change to status " . $this->status . "\n";
    }
}
