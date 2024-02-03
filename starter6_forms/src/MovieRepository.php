<?php
namespace Tudublin;


use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;

class MovieRepository extends DatabaseTableRepository
{
    public function createAndInsert($title, $price, $category, $productId)
    {
        $m = new Movie();
        $m->setTitle($title);
        $m->setPrice($price);
        $m->setCategory($category);
        $m->setProductId($productId);

        $this->insert($m);
    }
}
