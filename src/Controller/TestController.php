<?php

namespace App\Controller;

use App\Response\User;
use App\Response\UserResponse;
use Nelmio\ApiDocBundle\Attribute\Model;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[OA\Get(
        responses: [
            new OA\Response(
                response: Response::HTTP_OK,
                description: 'List of users',
                content: new OA\JsonContent(
                    ref: new Model(type: UserResponse::class)
                )
            ),
        ]
    )]
    #[Route('/api/test', name: 'app_test', methods: ["GET"])]
    public function index(): JsonResponse
    {
        return $this->json(
            new UserResponse([
                new User(1, "name", "email"),
                new User(2, "name", "email"),
                new User(3, "name", "email"),
                new User(4, "name", "email"),
            ], 1)
        );
    }
}
