<?php

namespace App\Service;

use App\Entity\Income;
use App\Repository\IncomeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

readonly class IncomeService
{
    public function __construct(
        private readonly IncomeRepository $incomeRepository,
        private readonly EntityManagerInterface $entityManager,
    )
    {
    }

    public function getIncomes(): array
    {
        return $this->incomeRepository->findAll();
    }

    public function saveIncome(
        Request $request,
    ): Income
    {
        $date = \DateTime::createFromFormat('Y-m-d', $request->request->get('date'));
        $amount = $request->request->get('amount');
        $description = $request->request->get('description');

        $income = (new Income())
            ->setAmount($amount)
            ->setDate($date)
            ->setDescription($description);

        $this->entityManager->persist($income);

        $this->entityManager->flush();

        return $income;
    }
}