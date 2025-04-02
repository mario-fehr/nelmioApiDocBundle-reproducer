<?php

namespace App\Controller;

use App\Response\Positioning;
use Nelmio\ApiDocBundle\Attribute\Model;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[OA\Get(
        responses: [
            new OA\Response(
                response: Response::HTTP_OK,
                description: 'Returns a Positioning object',
                content: new OA\JsonContent(
                    ref: new Model(type: Positioning::class)
                )
            ),
        ]
    )]
    #[Route('/api/test', name: 'app_test', methods: ["GET"])]
    public function index(): JsonResponse
    {

        return $this->json(new Positioning(null));
    }
}
