<?php

namespace App\ChainOfResponsibilityPattern;

use App\ChainOfResponsibilityPattern\Handlers\ComplaintHandler;
use App\ChainOfResponsibilityPattern\Handlers\FanHandler;
use App\ChainOfResponsibilityPattern\Handlers\NewLocHandler;
use App\ChainOfResponsibilityPattern\Handlers\SpamHandler;
use App\ChainOfResponsibilityPattern\Interfaces\Handler as HandlerInterface;

class MailHandler
{
    public function __construct()
    {
        $spamHandler = new SpamHandler();
        $fanHandler = new FanHandler();
        $complaintHandler = new ComplaintHandler();
        $newLocHandler = new NewLocHandler();

        $spamHandler->setNext($fanHandler)->setNext($complaintHandler)->setNext($newLocHandler);

        $mails = ['Spam', 'Fan', 'Complaint', 'New Location', 'Advertisement', 'New Location', 'New Location', 'Marketing'];

        echo "Handling process start with Spam Handler\n";
        $this->handleMails($spamHandler, $mails);

        echo "\nHandling process start with Complaint Handler\n";
        $this->handleMails($complaintHandler, $mails);
    }

    protected function handleMails(HandlerInterface $handler, array $mails)
    {
        foreach($mails as $index => $mail) {
            echo "Handling mail number " . ($index + 1) . ": ";
            $handler->handleRequest($mail);
        }
    }
}
