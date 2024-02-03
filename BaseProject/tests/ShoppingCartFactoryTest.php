<?php

namespace ShoppingCart;


use App\ShoppingCart\Factory\MyShopProductFactory;
use App\ShoppingCart\Shop;
use PHPUnit\Framework\TestCase;

class ShoppingCartFactoryTest extends TestCase {

    public function testShop(){
        $factory = new MyShopProductFactory();
        $shop = new Shop($factory);

        $productsToList = ['BumperSticker1', 'CoffeeTableBook5'];

        $targetOutput = <<<EOS
        BumperSticker1 - Cool bumper sticker
        CoffeeTableBook5 - Coffee Table book
        EOS;


        $this->assertSame($targetOutput , $shop->listProducts($productsToList));
    }
}