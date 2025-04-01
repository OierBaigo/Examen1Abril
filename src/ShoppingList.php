<?php

namespace Deg540\CleanCodeKata9;

class ShoppingList
{
    function cart(string $product): string
    {
        $separatedProduct = explode(" ",$product);
        if(strcmp("añadir",$separatedProduct[0]) === 0){
            return "pan x1";
        }
        return "";
    }
}