<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\ShoppingList;
use PHPUnit\Framework\TestCase;

class ShoppingListTest extends TestCase
{
    /**
     * @test
     */
    public function givenNoProductReturnsEmptyList():void
    {
        $cart = new ShoppingList();

        $result = $cart->cart("");

        $this->assertEquals("", $result);
    }

    /**
     * @test
     */
    public function givenAddInstrucctionAndProductReturnsListWithProduct():void
    {
        $cart = new ShoppingList();

        $result = $cart->cart("añadir pan");

        $this->assertEquals("pan x1", $result);
    }


}