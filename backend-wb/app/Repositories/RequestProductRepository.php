<?php

namespace App\Repositories;

use App\Models\RequestProduct\RequestProduct;
use App\Repositories\Interfaces\RequestProductInterface;

class RequestProductRepository implements RequestProductInterface
{
    /**
     * @param array $product
     * @return RequestProduct
     */
    public function create(array $product): RequestProduct
    {
        return RequestProduct::query()->create($product);
    }
}
