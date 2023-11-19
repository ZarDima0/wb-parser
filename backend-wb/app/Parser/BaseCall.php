<?php

namespace app\Parser;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class BaseCall
{
    /**
     * @var Client
     */
    private Client $client;
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @throws GuzzleException
     * @throws \Exception
     */
    protected function call(array $header, string $url, array $query = null): array
    {
        $response = $this->client->get($url, ["headers" => $header, "query" => $query]);

        if ($response->getStatusCode() != 200) {
            Log::error("Ошибка запроса");
            Log::error("Ответ:" . $response->getBody()->getContents());
            throw new \Exception('status code:' . $response->getStatusCode());
        }
        return json_decode($response->getBody()->getContents(), true);
    }
}
