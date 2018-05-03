<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SpidermanController extends Controller
{
    /**
     * @Route("/Spdm", name="Spiderman")
     */
    public function indexAction(Request $request)
    {
        return $this->render('Comic/spiderman.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}