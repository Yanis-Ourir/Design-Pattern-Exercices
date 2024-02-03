<?php

namespace App\ShoppingCart;

use App\ShoppingCart\Interfaces\ProductFactoryInterface;

class Shop {
    protected ProductFactoryInterface $productFactory;
    public function __construct(ProductFactoryInterface $productFactory) {
        $this->productFactory = $productFactory;
    }
    public function listProducts(array $codes) : string
    {
        $output = [];
        foreach ($codes as $code) {
            $product = $this->productFactory->createProduct($code);
            $output[] = $product->getShopProductCode() . ' - ' . $product->getShopDescription();
        }
        return implode(PHP_EOL, $output);
    }
}