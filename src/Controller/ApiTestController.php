<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;


final class ApiTestController extends AbstractController
{
    #[Route('/health', name: 'app_api_test', methods: ['GET'])]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ApiTestController.php',
        ]);
    }

    #[Route('/post-test', name: 'post-test', methods: ['POST'])]
    public function postTest(Request $req): JsonResponse
    {
        $data = $req->getContent();
        echo $data;
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'data' => $data,
        ]);
    }
}
