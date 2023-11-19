<?php

namespace App\Services\Product;

use App\Parser\Product\ProductParser;
use App\Repositories\Interfaces\ProductInterface;
use App\Repositories\Interfaces\RequestProductInterface;
use GuzzleHttp\Exception\GuzzleException;

class ProductService
{
    /**
     * @var ProductParser
     */
    protected ProductParser $productParser;
    /**
     * @var ProductInterface
     */
    private ProductInterface $productRepository;
    private RequestProductInterface $requestProduct;

    public function __construct(
        ProductInterface        $productRepository,
        RequestProductInterface $requestProductRepository
    )
    {
        $this->requestProduct = $requestProductRepository;
        $this->productRepository = $productRepository;
        $this->productParser = new ProductParser();
    }

    /**
     * @throws GuzzleException
     */
    public function processingProducts(): void
    {
        $products = $this->productParser->parse("iphone 12");
        $property = $products['property'];
        $newRequestProducts = $this->requestProduct->create($property->toArray());
        foreach ($products['data'] as $product) {
            $this->productRepository->create(
                array_merge(
                    $product->toArray(),
                    ['product_request_id' => $newRequestProducts->getId()]
                )
            );
        }
    }
}
