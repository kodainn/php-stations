<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $lessThanBudgetSweets = self::getSweetsLessThanBudget($sweets, 300);
        $budgetKeys = self::getRandomKeys($lessThanBudgetSweets, 300);
        $makeCom = self::makeCombination($sweets, $budgetKeys);

        return $makeCom;
    }

    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        $newArray = array_filter($sweets, function ($value) use ($budget) {
            return $value['price'] <= $budget;
        });

        return $newArray;
    }

    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {
        $sum = 0;
        $newArray = [];
        do {
            $sum = 0;
            $newArray = [];
            for ($i = 0; $i < 3; $i++) {
                $random = rand(0, count($lessThanBudgetSweets) - 1);
                $sum += $lessThanBudgetSweets[$random]['price'];
                $newArray[] = $random;
            }
        } while ($sum > $budget);

        sort($newArray);

        return $newArray;
    }

    private function makeCombination(array $sweets, array $keys)
    {
        $newArray = [];
        foreach ($keys as $k) {
            $newArray[] = $sweets[$k];
        }

        return $newArray;
    }
}
