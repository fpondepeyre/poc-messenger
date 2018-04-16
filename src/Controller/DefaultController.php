<?php

namespace App\Controller;

use App\Message\SendNotification;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;

class DefaultController
{
    public function index(MessageBusInterface $bus, Request $request)
    {
        $users = ['pierre', 'paulette'];
        $message = $request->query->get('message', 'Something.');

        $bus->dispatch(new SendNotification($message, $users));

        return new Response(
            '<html><body>Ok.</body></html>'
        );
    }
}