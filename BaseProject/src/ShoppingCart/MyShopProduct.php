<?php

namespace App\ShoppingCart;

use App\ShoppingCart\Interfaces\ProductFactoryInterface;
use App\ShoppingCart\Interfaces\ProductInterface;


// @TODO implement MyShopProduct

class MyShopProduct implements ProductInterface
{
    private $productCode;
    private $description;

    public function __construct($productCode, $description)
    {
        $this->productCode = $productCode;
        $this->description = $description;
    }

    public function getShopProductCode()
    {
        return $this->productCode;
    }

    public function getShopDescription()
    {
        return $this->description;
    }


}

