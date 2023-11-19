<?php

namespace App\Repositories;

use App\Entities\DTO\Auth\RegisterDTO;
use App\Models\Category\Category;
use App\Repositories\Interfaces\CategoryInterface;

class CategoryRepository implements CategoryInterface
{
    /**
     * @param array $categoryExternal
     * @return Category
     */
    public function updateOfCreate(array $categoryExternal): Category
    {
        return Category::query()->updateOrCreate($categoryExternal);
    }
}
