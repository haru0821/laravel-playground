<?php

namespace App\Services;

class CalculatorService
{
    /**
     * 덧셈
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function add(int $input1, int $input2): int
    {
        return $input1 + $input2;
    }

    /**
     * 뺄셈
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function subtract(int $input1, int $input2): int
    {
        return $input1 - $input2;
    }

    /**
     * 곱셈
     *
     * @param int $a
     * @param int $b
     * @return int
     */
    public function multiply(int $input1, int $input2): int
    {
        return $input1 * $input2;
    }

    /**
     * 나눗셈
     *
     * @param int $a
     * @param int $b
     * @return float
     */
    public function divide(int $input1, int $input2): float
    {
        if ($input2 == 0) {
            throw new \InvalidArgumentException("Cannot divide by zero.");
        }

        return $input1 / $input2;
    }
}
