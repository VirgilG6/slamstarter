<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjetcsContollerController extends AbstractController
{
    /**
     * @Route("/projects", name="projetcs_contoller")
     */
    public function index()
    {
        $projects = ['Project 1','Project 2','Project 3'];
        return $this->render('projetcs_contoller/index.html.twig', [
            'projects' => $projects,
        ]);
    }
}
