<?php

namespace App\Repositories;

use App\Models\Product\Product;
use App\Repositories\Interfaces\ProductInterface;

class ProductRepository implements ProductInterface
{
    /**
     * @param array $product
     * @return Product
     */
    public function create(array $product): Product
    {
        return Product::query()->create($product);
    }
}
