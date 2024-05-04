<?php

namespace App\Service;

use App\Entity\Income;
use App\Repository\IncomeRepository;

class IncomeService {
    public function __construct(
        private readonly IncomeRepository $incomeRepository
    )
    {
    }

    public function getIncomes(): array {
        return $this->incomeRepository->findAll();
    }
}