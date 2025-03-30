<?php

namespace App\Controller;

use App\Response\SerializerGroups;
use App\Response\User;
use Nelmio\ApiDocBundle\Attribute\Model;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[OA\Get(
        responses: [
            new OA\Response(
                response: Response::HTTP_OK,
                description: 'Successful response',
                content: new OA\JsonContent(
                    ref: new Model(type: User::class, groups: [SerializerGroups::PUBLIC])
                )
            ),
        ]
    )]
    #[Route('/api/user', name: 'app_user', methods: ["GET"])]
    public function index(): JsonResponse
    {
        return $this->json(new User(1, "name", "email"));
    }

    #[OA\Get(
        responses: [
            new OA\Response(
                response: Response::HTTP_OK,
                description: 'Successful response',
                content: new OA\JsonContent(
                    ref: new Model(type: User::class, groups: [SerializerGroups::PRIVATE])
                )
            ),
        ]
    )]
    #[Route('/api/user2', name: 'app_user2', methods: ["GET"])]
    public function index2(): JsonResponse
    {
        return $this->json(new User(1, "name", "email"));
    }

    #[OA\Get(
        responses: [
            new OA\Response(
                response: Response::HTTP_OK,
                description: 'Successful response',
                content: new OA\JsonContent(
                    ref: new Model(type: User::class, groups: [SerializerGroups::PUBLIC, SerializerGroups::PRIVATE])
                )
            ),
        ]
    )]
    #[Route('/api/user3', name: 'app_user3', methods: ["GET"])]
    public function index3(): JsonResponse
    {
        return $this->json(new User(1, "name", "email"));
    }
}
