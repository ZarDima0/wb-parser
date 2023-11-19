<?php

namespace App\DTO\Category;

class CategoryExternalDTO
{
    /**
     * @var int
     */
    public int $externalId;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $url;

    /**
     * @var string|null
     */
    public string|null $seo = null;

    /**
     * @return int
     */
    public function getExternalId(): int
    {
        return $this->externalId;
    }

    /**
     * @param int $externalId
     * @return CategoryExternalDTO
     */
    public function setExternalId(int $externalId): CategoryExternalDTO
    {
        $this->externalId = $externalId;
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
     * @return CategoryExternalDTO
     */
    public function setName(string $name): CategoryExternalDTO
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return CategoryExternalDTO
     */
    public function setUrl(string $url): CategoryExternalDTO
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSeo(): ?string
    {
        return $this->seo;
    }

    /**
     * @param string|null $seo
     * @return CategoryExternalDTO
     */
    public function setSeo(?string $seo): CategoryExternalDTO
    {
        $this->seo = $seo;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->getName(),
            'seo' => $this->getSeo(),
            'external_id' => $this->getExternalId(),
            'url' => $this->getUrl()
        ];
    }
}
