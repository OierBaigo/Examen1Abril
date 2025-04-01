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
        if($this->isAdd($separatedProduct[0])) {
            return $this->addProductToShoppingList($separatedProduct);
        }
        return "";
    }

    /**
     * @param $string2
     * @return bool
     */
    private function isAdd($string2): bool
    {
        return strcmp("añadir", $string2) === 0;
    }

    /**
     * @return bool
     */
    private function isFirstProduct(): bool
    {
        return empty($this->shoppingList);
    }

    /**
     * @param array $separatedProduct
     * @return bool
     */
    private function inputHasQuantity(array $separatedProduct): bool
    {
        return count($separatedProduct) === 3;
    }

    /**
     * @param array $separatedProduct
     * @return string
     */
    private function addProductToShoppingList(array $separatedProduct): string
    {
        if (!$this->isFirstProduct()) {
            $this->shoppingList .= ", ";
        }
        if ($this->inputHasQuantity($separatedProduct)) {
            $this->shoppingList .= $separatedProduct[1] . " x" . $separatedProduct[2];
        } else {
            $this->shoppingList .= $separatedProduct[1] . " x1";
        }
        return $this->shoppingList;
    }
}