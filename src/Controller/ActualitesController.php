<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ActualitesController extends AbstractController
{
    /**
     * @Route("/actualites", name="actualites")
     */
    public function index()
    {
        return $this->render('actualites/index.html.twig', [
            'controller_name' => 'ActualitesController',
        ]);
    }

	/**
	 * @Route("/actualites/page", name="actualites_page")
	 */
	public function page()
	{
		return $this->render('actualites/index.html.twig', [
			'controller_name' => 'ActualitesController - Choisissez une page',
		]);
	}

	/**
	 * @Route("/actualites/page/{pageNumber}", name="actualites_page", requirements={"pageNumber"="\d+"})
	 */
	public function getPage(int $pageNumber = 1)
	{
		return $this->render('actualites/index.html.twig', [
			'controller_name' => 'ActualitesController - Page '.$pageNumber,
		]);
	}
}
