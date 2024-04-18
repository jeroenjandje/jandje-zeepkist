<?php

namespace App\Controller\API;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
abstract class AbstractAPIController extends AbstractFOSRestController
{

}