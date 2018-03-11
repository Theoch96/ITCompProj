<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ComicInfo extends controller
{
 /**
     * @Route("/comicinfo")
     */
	 
   public function ComicInfoAction(Request $request)
    {
        return $this->render('C:\FinalProject\Project\app\Resources\views\Comic\ComicInfo.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}