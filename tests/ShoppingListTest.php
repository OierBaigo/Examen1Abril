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
    public function givenAddInstructionAndProductReturnsListWithProduct():void
    {
        $shoppingList = "";
        $cart = new ShoppingList($shoppingList);

        $result = $cart->cart("añadir pan");

        $this->assertEquals("pan x1", $result);
    }

    /**
     * @test
     */
    public function givenAddInstructionAndMultipleProductsReturnsListWithProduct():void
    {
        $shoppingList = "";
        $cart = new ShoppingList($shoppingList);

        $cart->cart("añadir leche");
        $result = $cart->cart("añadir pan");

        $this->assertEquals("leche x1, pan x1", $result);
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


}