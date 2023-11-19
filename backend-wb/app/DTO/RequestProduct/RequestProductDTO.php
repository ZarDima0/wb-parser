<?php

namespace App\DTO\RequestProduct;


class RequestProductDTO
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var string
     */
    public string $query;

    /**
     * @var string
     */
    public string $catalog_type;

    /**
     * @var string
     */
    public string $catalog_value;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return RequestProductDTO
     */
    public function setId(int $id): RequestProductDTO
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
     * @return RequestProductDTO
     */
    public function setQuery(string $query): RequestProductDTO
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
     * @return RequestProductDTO
     */
    public function setCatalogType(string $catalog_type): RequestProductDTO
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
     * @return RequestProductDTO
     */
    public function setCatalogValue(string $catalog_value): RequestProductDTO
    {
        $this->catalog_value = $catalog_value;
        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'query' => $this->getQuery(),
            'catalog_value' => $this->getCatalogValue(),
            'catalog_type' => $this->getCatalogType()
        ];
    }
}
