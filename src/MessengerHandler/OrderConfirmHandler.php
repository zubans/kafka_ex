<?php

namespace App\MessengerHandler;

use App\Message\Confirmation;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;
use Symfony\Component\Messenger\Stamp\StampInterface;

class OrderConfirmHandler implements MessageHandlerInterface
{
    public function __invoke(Confirmation $confirmation)
    {
        echo 'sending ...';
        sleep(5);
    }
}
