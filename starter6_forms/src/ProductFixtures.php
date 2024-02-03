<?php

namespace Tudublin;

class ProductFixtures
{
    public function getArray()
    {
        $products = [];

        $p1 = new Product();
        $p1->setTitle('hammer');
        $p1->setId(1);

        $p2 = new Product();
        $p2->setTitle('ladder');
        $p2->setId(2);

        $products[1] = $p1;
        $products[2] = $p2;

        return $products;
    }
}