<?php

namespace Demini2\OtusCalculator;

/**
 * Клас калькулятора
 */
class Calculator
{
    /**
     * Получить сумму двух чисел
     *
     * @param int|float $a
     * @param int|float $b
     * @return float|int|string
     */
    public function getSum(int|float $a, int|float $b): float|int|string
    {
        if (!is_int($a) && !is_float($a)) {

            return 'Переменная $a должна быть числом';
        }

        if (!is_int($b) && !is_float($b)) {

            return 'Переменная $b должна быть числом';
        }

        return $a + $b;
    }
}
