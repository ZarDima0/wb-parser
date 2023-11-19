<?php

namespace App\Repositories\Interfaces;

use App\Models\RequestProduct\RequestProduct;

interface RequestProductInterface
{
    /**
     * @param array $product
     * @return RequestProduct
     */
    public function create(array $product): RequestProduct;
}
