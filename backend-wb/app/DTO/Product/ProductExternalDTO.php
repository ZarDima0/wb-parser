<?php

namespace App\DTO\Product;


class ProductExternalDTO
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var int
     */
    public int $product_request_id;

    /**
     * @var int
     */
    public int $external_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $brand;

    /**
     * @var int
     */
    public int $brand_id;

    /**
     * @var string
     */
    public string $supplier;

    /**
     * @var int|null
     */
    public int|null $sale;

    /**
     * @var int
     */
    public int $price;

    /**
     * @var int|null
     */
    public int|null $salePrice;

    /**
     * @var int
     */
    public int $rating;

    /**
     * @var int
     */
    public int $reviewRating;

    /**
     * @var int
     */
    public int $feedbacks;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ProductExternalDTO
     */
    public function setId(int $id): ProductExternalDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductRequestId(): int
    {
        return $this->product_request_id;
    }

    /**
     * @param int $product_request_id
     * @return ProductExternalDTO
     */
    public function setProductRequestId(int $product_request_id): ProductExternalDTO
    {
        $this->product_request_id = $product_request_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getExternalId(): int
    {
        return $this->external_id;
    }

    /**
     * @param int $external_id
     * @return ProductExternalDTO
     */
    public function setExternalId(int $external_id): ProductExternalDTO
    {
        $this->external_id = $external_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ProductExternalDTO
     */
    public function setName(string $name): ProductExternalDTO
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return ProductExternalDTO
     */
    public function setBrand(string $brand): ProductExternalDTO
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return int
     */
    public function getBrandId(): int
    {
        return $this->brand_id;
    }

    /**
     * @param int $brand_id
     * @return ProductExternalDTO
     */
    public function setBrandId(int $brand_id): ProductExternalDTO
    {
        $this->brand_id = $brand_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSupplier(): string
    {
        return $this->supplier;
    }

    /**
     * @param string $supplier
     * @return ProductExternalDTO
     */
    public function setSupplier(string $supplier): ProductExternalDTO
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSale(): ?int
    {
        return $this->sale;
    }

    /**
     * @param int|null $sale
     * @return ProductExternalDTO
     */
    public function setSale(?int $sale): ProductExternalDTO
    {
        $this->sale = $sale;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return ProductExternalDTO
     */
    public function setPrice(int $price): ProductExternalDTO
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSalePrice(): ?int
    {
        return $this->salePrice;
    }

    /**
     * @param int|null $salePrice
     * @return ProductExternalDTO
     */
    public function setSalePrice(?int $salePrice): ProductExternalDTO
    {
        $this->salePrice = $salePrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     * @return ProductExternalDTO
     */
    public function setRating(int $rating): ProductExternalDTO
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return int
     */
    public function getReviewRating(): int
    {
        return $this->reviewRating;
    }

    /**
     * @param int $reviewRating
     * @return ProductExternalDTO
     */
    public function setReviewRating(int $reviewRating): ProductExternalDTO
    {
        $this->reviewRating = $reviewRating;
        return $this;
    }

    /**
     * @return int
     */
    public function getFeedbacks(): int
    {
        return $this->feedbacks;
    }

    /**
     * @param int $feedbacks
     * @return ProductExternalDTO
     */
    public function setFeedbacks(int $feedbacks): ProductExternalDTO
    {
        $this->feedbacks = $feedbacks;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'external_id' => $this->getExternalId(),
            'name' => $this->getName(),
            'brand' => $this->getBrand(),
            'brand_id' => $this->getBrandId(),
            'supplier' => $this->getSupplier(),
            'sale' => $this->getSale(),
            'sale_price' => $this->getSalePrice(),
            'rating' => $this->getRating(),
            'review_rating' => $this->getReviewRating(),
            'feedbacks' => $this->getFeedbacks(),
            'price' => $this->getPrice(),
        ];
    }
}
