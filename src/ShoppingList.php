<?php

namespace Deg540\CleanCodeKata9;

class ShoppingList
{

    private string $shoppingList;

    public function __construct(string $shoppingList)
    {
        $this->shoppingList = $shoppingList;
    }

    function cart(string $product): string
    {
        $separatedProduct = explode(" ",$product);
        if(strcmp("añadir",$separatedProduct[0]) === 0){
            if(empty($this->shoppingList)) {
                if(count($separatedProduct) === 3){
                    $this->shoppingList .= $separatedProduct[1] . " x" . $separatedProduct[2];
                }else{
                    $this->shoppingList .= $separatedProduct[1] . " x1";
                }
            }
            else
                $this->shoppingList .= ", " . $separatedProduct[1] . " x1";
            return  $this->shoppingList;
        }
        return "";
    }
}