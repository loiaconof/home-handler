<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;

#[Route('/api/security', name: 'app_security_')]
class LoginController extends AbstractController
{
    #[Route('/json/login', name: 'json_login')]
    public function jsonLogin(#[CurrentUser] ?User $user, Request $request): JsonResponse
    {
//        todo, not working
         if (null === $user) {
             return $this->json([
                 'message' => 'missing credentials',
                 'getContent' => json_decode($request->getContent(), true),
                 'username' => $request->get('username'),
                 'password' => $request->get('password'),
                 'user' => $this->getUser(),
             ], Response::HTTP_UNAUTHORIZED);
         }

         $token = '...'; // somehow create an API token for $user

        return $this->json([
            'user'  => $user->getUserIdentifier(),
            'token' => $token,
        ]);
    }
}
