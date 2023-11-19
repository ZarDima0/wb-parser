<?php

namespace App\Models\Category;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category\Category
 * @property string $id
 * @property string $name
 * @property string $url
 * @property string $seo
 * @property string $external_id
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @mixin Eloquent
 */
class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Category
     */
    public function setId(string $id): Category
    {
        $this->id = $id;
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
     * @return Category
     */
    public function setName(string $name): Category
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
     * @return Category
     */
    public function setUrl(string $url): Category
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeo(): string
    {
        return $this->seo;
    }

    /**
     * @param string $seo
     * @return Category
     */
    public function setSeo(string $seo): Category
    {
        $this->seo = $seo;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->external_id;
    }

    /**
     * @param string $external_id
     * @return Category
     */
    public function setExternalId(string $external_id): Category
    {
        $this->external_id = $external_id;
        return $this;
    }
}
