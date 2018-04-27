<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig', [
      'controller_name' => 'WelcomeController',
    ]);
      //return new Response('<html><body>hello</body></html>', Response::HTTP_OK);
    }
}
