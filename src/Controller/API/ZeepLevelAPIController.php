<?php

namespace App\Controller\API;

use App\Repository\ZeepLevelRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ZeepLevelAPIController extends AbstractAPIController
{

    #[Route(
        path: '/zeeplevels',
        methods: ['GET'],
    )]
    public function index(ZeepLevelRepository $zeepLevelRepository)
    {
        $data = $zeepLevelRepository->findAll();
        return new JsonResponse(['data' => $data, 'status' => 200, 'headers' => ["Content-Type" => "application/json"]]);
    }

    #[Route(
        path: '/zeeplevels',
        methods: ['POST'],
    )]
    public function store()
    {
        
    }

    #[Route(
        path: '/zeeplevels/{zeepLevel}',
        methods: ['GET'],
    )]
    public function show()
    {

    }

    #[Route(
        path: '/zeeplevels/{zeepLevel}',
        methods: ['PUT'],
    )]
    public function update()
    {

    }

}