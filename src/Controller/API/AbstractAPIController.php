<?php

namespace App\Controller\API;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\Routing\Attribute\Route;

// @TODO: Add subdomain prefix in future
#[Route()]
abstract class AbstractAPIController extends AbstractFOSRestController
{

}