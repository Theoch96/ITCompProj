<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ComicList extends controller
{
 /**
     * @Route("/comiclist")
     */
	 
   public function ComicAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('C:\FinalProject\Project\app\Resources\views\Comic\ComicList.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}