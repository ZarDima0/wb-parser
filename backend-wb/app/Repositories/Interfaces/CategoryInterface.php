<?php
namespace App\Repositories\Interfaces;


use App\DTO\Category\CategoryExternalDTO;
use App\Models\Category\Category;

interface CategoryInterface
{
    public function updateOfCreate(array $categoryExternal):Category;
}
