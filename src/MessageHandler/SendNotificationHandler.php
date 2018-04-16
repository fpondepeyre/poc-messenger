<?php

namespace App\MessageHandler;

use App\Message\SendNotification;

/**
 * Class SendNotificationHandler
 */
class SendNotificationHandler
{
    public function __invoke(SendNotification $message)
    {
        foreach ($message->getUsers() as $user) {
            echo "Send notification to...".$user."\n";
        }
    }
}
