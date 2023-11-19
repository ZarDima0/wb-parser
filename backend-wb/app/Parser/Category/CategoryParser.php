<?php

namespace App\Parser\Category;

use App\DTO\Category\CategoryExternalDTO;
use App\Parser\BaseCall;
use GuzzleHttp\Exception\GuzzleException;

class CategoryParser extends BaseCall
{
    private array $header = [
        'sec-ch-ua' => '"Google Chrome";v="119", "Chromium";v="119", "Not?A_Brand";v="24"',
        'Referer' => 'https://www.wildberries.ru/',
        'DNT' => '1',
        'sec-ch-ua-mobile' => '?0',
        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',
        'sec-ch-ua-platform' => '"Windows"'];

    private string $url = "https://static-basket-01.wb.ru/vol0/data/main-menu-ru-ru-v2.json";

    /**
     * @return array
     * @throws GuzzleException
     */
    public function parse(): array
    {
        $result = $this->call($this->header, $this->url);
        $arrayDTO = [];
        for ($i = 0; $i < count($result); $i++) {
            $arrayDTO[] = $this->createDTO($result[$i]);
            if (isset($result[$i]['childs'])) {
                for ($x = 0; $x < count($result[$i]['childs']); $x++) {
                    $arrayDTO[] = $this->createDTO($result[$i]['childs'][$x]);
                }
            }
        }
        return $arrayDTO;
    }

    private function createDTO(array $category): CategoryExternalDTO
    {
        $newCategoryExternal = new CategoryExternalDTO();

        $newCategoryExternal->setExternalId($category['id']);
        $newCategoryExternal->setName($category['name']);
        $newCategoryExternal->setUrl($category['url']);
        if (isset($category['seo'])) {
            $newCategoryExternal->setSeo($category['seo']);
        }
        return $newCategoryExternal;
    }
}
