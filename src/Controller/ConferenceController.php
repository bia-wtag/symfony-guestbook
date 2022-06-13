<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(Request $request): Response
    {
        $easterEgg = '';
        $param = $request->query->get('hello');
        if ($param) {
            $easterEgg = "Hello $param";
        }

        return $this->render('homepage.html.twig', [
            'name' => $easterEgg,
        ]);
    }
}
