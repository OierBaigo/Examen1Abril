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
    public function givenAddInstrucctionAndProductReturnsListWithProduct():void
    {
        $shoppingList = "";
        $cart = new ShoppingList($shoppingList);

        $result = $cart->cart("añadir pan");

        $this->assertEquals("pan x1", $result);
    }


}