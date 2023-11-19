<?php

namespace App\Parser\Product;

use App\DTO\Product\ProductExternalDTO;
use App\DTO\RequestProduct\RequestProductDTO;
use App\Parser\BaseCall;
use GuzzleHttp\Exception\GuzzleException;

class ProductParser extends BaseCall
{
    private array $header = [
        'Accept' => '*/*',
        'Accept-Language' => 'ru,en-US;q=0.9,en;q=0.8,ru-RU;q=0.7',
        'Connection' => 'keep-alive',
        'DNT' => '1',
        'Origin' => 'https://www.wildberries.ru',
        'Sec-Fetch-Dest' => 'empty',
        'Sec-Fetch-Mode' => 'cors',
        'Sec-Fetch-Site' => 'cross-site',
        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',
        'sec-ch-ua' => '"Google Chrome";v="119", "Chromium";v="119", "Not?A_Brand";v="24"',
        'sec-ch-ua-mobile' => '?0',
        'sec-ch-ua-platform' => '"Windows"'
    ];

    private array $params = [
        'TestGroup' => 'pk3_alpha05',
        'TestID' => '351',
        'appType' => '1',
        'curr' => 'rub',
        'dest' => '-1257786',
        'resultset' => 'catalog',
        'sort' => 'popular',
        'spp' => '25',
        'suppressSpellcheck' => 'false'
    ];

    private string $url = "https://search.wb.ru/exactmatch/ru/common/v4/search";

    /**
     * @param string $query
     * @return array
     * @throws GuzzleException
     */
    public function parse(string $query): array
    {
        $pageResult = [];

        for ($i = 0; $i < 10; $i++) {
            $pageResult[] = $this->call(
                header: $this->header,
                url: $this->url,
                query: array_merge($this->params, [
                    "query" => $query,
                    "page" => $i
                ]));
        }
        $result = [];
        foreach ($pageResult as $item) {
            if (isset($item['data']['products'])) {
                $result = array_merge($result, $item['data']['products']);
            }
        }
        return [
            'property' => $this->createPropertyDTO($pageResult[1]['metadata']),
            'data' => $this->createProductDTO($result)
        ];
    }

    private function createPropertyDTO(array $metadata): RequestProductDTO
    {
        return (new RequestProductDTO())
            ->setQuery($metadata['name'])
            ->setCatalogValue($metadata['catalog_value'])
            ->setCatalogType($metadata['catalog_type']);
    }

    private function createProductDTO(array $data): array
    {
        $result = [];
        for ($i = 0; $i < count($data); $i++) {
            $result[] = (new ProductExternalDTO())
                ->setName($data[$i]['name'])
                ->setExternalId($data[$i]['id'])
                ->setBrand($data[$i]['brand'])
                ->setBrandId($data[$i]['brandId'])
                ->setPrice($data[$i]['priceU'])
                ->setSalePrice($data[$i]['salePriceU'])
                ->setSale($data[$i]['sale'])
                ->setRating($data[$i]['rating'])
                ->setReviewRating($data[$i]['reviewRating'])
                ->setSupplier($data[$i]['supplier'])
                ->setFeedbacks($data[$i]['feedbacks']);

        }
        return $result;
    }
}
