<?php

namespace App\Controller;

use App\Service\IncomeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api', name: 'app_')]
class IncomeController extends AbstractController
{
    public function __construct(
        private readonly IncomeService $incomeService,
    )
    {
    }

    #[Route('/income', name: 'get_income', methods: ['GET'])]
    public function getIncomes(): JsonResponse
    {
        return $this->json(
            $this->incomeService->getIncomes()
        );
    }

    #[Route('/income', name: 'save_income', methods: ['POST'])]
    public function saveIncome(Request $request): JsonResponse
    {
        $income = $this->incomeService->saveIncome(request: $request);
        return $this->json($income);
    }
}
