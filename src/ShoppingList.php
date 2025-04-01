<?php

namespace Deg540\CleanCodeKata9;

class ShoppingList
{
    function cart(string $product): string
    {
        if(empty($product)) {
            return "";
        }
        return "pan x1";
    }
}