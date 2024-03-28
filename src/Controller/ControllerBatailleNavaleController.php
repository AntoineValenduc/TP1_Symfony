<?php

namespace App\Controller;

use App\Service\ServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ControllerBatailleNavaleController extends AbstractController
{

    public function __construct(private ServiceInterface $service)
    {

    }
    #[Route('/controller/bataille/navale', name: 'app_controller_bataille_navale')]
    public function index(): Response
    {
        return $this->render('controller_bataille_navale/index.html.twig', [
            'controller_name' => $this->service->creationBateau()
        ]);
    }
}
