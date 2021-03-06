<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("/general", name="general")
     */
    public function index()
    {
        return $this->render('general/index.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }

	/**
	 * @Route("/general/truc", name="general_truc")
	 */
	public function truc()
	{
		return $this->render('general/index.html.twig', [
			'controller_name' => 'GeneralController avec truc dedans',
		]);
	}
}
