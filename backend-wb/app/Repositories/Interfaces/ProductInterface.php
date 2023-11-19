<?php
namespace App\Repositories\Interfaces;


use App\Models\Category\Category;
use App\Models\Product\Product;

interface ProductInterface
{
    /**
     * @param array $product
     * @return Product
     */
    public function create(array $product):Product;
}
