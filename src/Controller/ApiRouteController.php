<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

class ApiRouteController extends AbstractController
{
    #[Route('/api/route', methods: ['PATCH'])]
    public function patchRoute(#[MapRequestPayload(type: 'int')] array $ids): Response {
        return $this->json($ids);
    }
}
