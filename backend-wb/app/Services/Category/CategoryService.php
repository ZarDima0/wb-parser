<?php

namespace App\Services\Category;

use App\Parser\Category\CategoryParser;
use App\Repositories\Interfaces\CategoryInterface;
use GuzzleHttp\Exception\GuzzleException;

class CategoryService
{
    /**
     * @var CategoryInterface
     */
    private CategoryInterface $categoryRepository;

    /**
     * @var CategoryParser
     */
    protected CategoryParser $categoryParser;

    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->categoryParser = new CategoryParser();
    }

    /**
     * @throws GuzzleException
     */
    public function processingCategory(): void
    {
        $categories = $this->categoryParser->parse();
        foreach ($categories as $category) {
            $this->categoryRepository->updateOfCreate($category->toArray());
        }
    }
}
