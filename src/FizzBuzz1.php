<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz1
{
    private const FIZZ_NUMBER = 3;
    private const BUZZ_NUMBER = 5;
    /**
     * @param int $value
     *
     * @return string
     */
    function convertirValor(int $value): string {
        if($this->isFizzBuzz($value)) return 'FizzBuzz';
        if($this->isFizz($value)) return 'Fizz';
        if($this->isBuzz($value)) return 'Buzz';
        return strval($value);
    }

    private function isFizz(int $value): bool
    {
        return $value % self::FIZZ_NUMBER === 0;
    }

    private function isBuzz(int $value): bool
    {
        return $value % self::BUZZ_NUMBER === 0;
    }

    private function isFizzBuzz(int $value): bool
    {
        return $this->isFizz($value) && $this->isBuzz($value);
    }
}