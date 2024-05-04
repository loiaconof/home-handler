<?php

namespace App\Controller;

use App\Service\IncomeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;


class IncomeController extends AbstractController
{
    public function __construct(
        private readonly IncomeService $incomeService
    )
    {
    }

    #[Route('/incomes', name: 'app_income')]
    public function index(): JsonResponse
    {
        return $this->json($this->incomeService->getIncomes());
    }
}
