<?php

namespace App\Models\RequestProduct;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RequestProduct\RequestProduct
 * @property int $id
 * @property string $query
 * @property string $catalog_type
 * @property string $catalog_value
 * @method static \Illuminate\Database\Eloquent\Builder|RequestProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RequestProduct query()
 * @mixin Eloquent
 */
class RequestProduct extends Model
{
    use HasFactory;
    protected $table = 'requests_products';
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
     * @return RequestProduct
     */
    public function setId(int $id): RequestProduct
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @param string $query
     * @return RequestProduct
     */
    public function setQuery(string $query): RequestProduct
    {
        $this->query = $query;
        return $this;
    }

    /**
     * @return string
     */
    public function getCatalogType(): string
    {
        return $this->catalog_type;
    }

    /**
     * @param string $catalog_type
     * @return RequestProduct
     */
    public function setCatalogType(string $catalog_type): RequestProduct
    {
        $this->catalog_type = $catalog_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCatalogValue(): string
    {
        return $this->catalog_value;
    }

    /**
     * @param string $catalog_value
     * @return RequestProduct
     */
    public function setCatalogValue(string $catalog_value): RequestProduct
    {
        $this->catalog_value = $catalog_value;
        return $this;
    }
}
