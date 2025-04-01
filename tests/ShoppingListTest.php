<?php

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\ShoppingList;
use PHPUnit\Framework\TestCase;

class ShoppingListTest extends TestCase
{
    private string $shoppingList;

    /**
     * @test
     */
    public function givenAddInstructionAndMultipleProductsAndQuantitiesReturnsListWithProductsAndQuantities():void
    {
        $shoppingList = "";
        $cart = new ShoppingList($shoppingList);

        $cart->cart("añadir leche");
        $result = $cart->cart("añadir pan 3");

        $this->assertEquals("leche x1, pan x3", $result);
    }

    /**
     * @test
     */
    public function givenAddInstructionAndProductAndQuantityReturnsListWithProductAndQuantity():void
    {
        $shoppingList = "";
        $cart = new ShoppingList($shoppingList);

        $result = $cart->cart("añadir pan 2");

        $this->assertEquals("pan x2", $result);
    }

    /**
     * @test
     */
    public function givenTheSameProductTwiceReturnsListWithSameProductAndSumQuantities():void
    {
        $shoppingList = "";
        $cart = new ShoppingList($shoppingList);

        $cart->cart("añadir pan");
        $result = $cart->cart("añadir pan 2");

        $this->assertEquals("pan x3", $result);
    }

    /**
     * @test
     */
    public function givenEliminateInstructionReturnsListWithoutProduct():void
    {

    }


}