<?php

namespace App\ShoppingCart\Factory;

use App\ShoppingCart\Interfaces\ProductFactoryInterface;
use App\ShoppingCart\Interfaces\ProductInterface;
use App\ShoppingCart\MyShopProduct;


class MyShopProductFactory implements ProductFactoryInterface
{
    private $database = [
        'BumperSticker1' => 'Cool bumper sticker',
        'CoffeeTableBook5' => 'Coffee Table book',
    ];

    public function createProduct($productCode): ProductInterface
    {
        return new MyShopProduct($productCode, $this->database[$productCode]);
    }
}