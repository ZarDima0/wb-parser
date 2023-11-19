<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Product\Product
 * @property int $id
 * @property int $product_request_id
 * @property int $external_id
 * @property string $name
 * @property string $brand
 * @property int $brand_id
 * @property string $supplier
 * @property int|null $sale
 * @property int $price
 * @property int|null $sale_price
 * @property int $rating
 * @property int $review_rating
 * @property int $feedbacks
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @mixin Eloquent
 */
class Product extends Model
{
    use HasFactory;
    protected $table = "products";

    protected $guarded = ['id'];
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Product
     */
    public function setId(int $id): Product
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
     * @return Product
     */
    public function setProductRequestId(int $product_request_id): Product
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
     * @return Product
     */
    public function setExternalId(int $external_id): Product
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
     * @return Product
     */
    public function setName(string $name): Product
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
     * @return Product
     */
    public function setBrand(string $brand): Product
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
     * @return Product
     */
    public function setBrandId(int $brand_id): Product
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
     * @return Product
     */
    public function setSupplier(string $supplier): Product
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
     * @return Product
     */
    public function setSale(?int $sale): Product
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
     * @return Product
     */
    public function setPrice(int $price): Product
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSalePrice(): ?int
    {
        return $this->sale_price;
    }

    /**
     * @param int|null $sale_price
     * @return Product
     */
    public function setSalePrice(?int $sale_price): Product
    {
        $this->sale_price = $sale_price;
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
     * @return Product
     */
    public function setRating(int $rating): Product
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return int
     */
    public function getReviewRating(): int
    {
        return $this->review_rating;
    }

    /**
     * @param int $review_rating
     * @return Product
     */
    public function setReviewRating(int $review_rating): Product
    {
        $this->review_rating = $review_rating;
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
     * @return Product
     */
    public function setFeedbacks(int $feedbacks): Product
    {
        $this->feedbacks = $feedbacks;
        return $this;
    }
}
