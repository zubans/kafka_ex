<?php

namespace App\Controller;

use App\Message\Confirmation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class RabbitController extends AbstractController
{
    #[Route('/rabbit', name: 'app_rabbit')]
    public function index(MessageBusInterface $bus): Response
    {
        $bus->dispatch(new Confirmation('this from controller'));

        return new Response('your message is ');
    }
}
