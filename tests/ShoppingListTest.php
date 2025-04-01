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

        $cart->cart("añadir leche 2");
        $result = $cart->cart("añadir pan 3");

        $this->assertEquals("leche x2, pan x3", $result);
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