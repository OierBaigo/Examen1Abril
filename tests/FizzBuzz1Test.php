<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz1;
use PHPUnit\Framework\TestCase;

class FizzBuzz1Test extends TestCase
{
    private FizzBuzz1 $fizz;

    public function setUp(): void {
        parent::setUp();
        $this->fizz = new FizzBuzz1();
    }

    /**
     * @test
     */
    public function given1Return1(): void
    {
        $value = $this->fizz->convertirValor(1);

        $this->assertEquals('1',$value);
    }

    /**
     * @test
     */
    public function givenFizzBuzzNumberReturnFizzBuzz()
    {
        $value = $this->fizz->convertirValor(15);

        $this->assertEquals('FizzBuzz',$value);
    }

    /**
     * @test
     */
    public function givenFizzNumberReturnFizz()
    {
        $value = $this->fizz->convertirValor(3);

        $this->assertEquals('Fizz',$value);
    }

    /**
     * @test
     */
    public function givenBuzzNumberReturnBuzz()
    {
        $value = $this->fizz->convertirValor(5);

        $this->assertEquals('Buzz',$value);
    }
}