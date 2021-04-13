<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\CleanCode\RequestStatus;
use App\CleanCode\RequestStatusRefactored;
use App\CleanCode\Statuses\ApproveStatus;
use App\CleanCode\Statuses\PendingStatus;
use App\CleanCode\Statuses\BlockedStatus;

$test = new RequestStatusRefactored(new PendingStatus());
$result = $test->updateStatus(1);
echo $result;
