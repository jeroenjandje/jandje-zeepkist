<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class FrontPageController extends AbstractController
{
	
	#[Route(path: '/', name: 'front_page')]
	public function index()
	{
		return new JsonResponse(['success' => true, 'data' => 'henk']);
	}
	
}