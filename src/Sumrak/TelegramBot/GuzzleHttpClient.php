<?php

namespace Sumrak\TelegramBot;

use GuzzleHttp\Client;
use Sumrak\TelegramBot\Exception\ApiException;

class GuzzleHttpClient implements HttpClientInterface
{
    /**
     * @var Client
     */
    private $client;

    /**
     * HttpClient constructor.
     * @param Client|null $client
     */
    public function __construct(?Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    /**
     * @param string $url
     * @param array $params
     * @return string
     * @throws ApiException
     */
    public function call(string $url, array $params = []): string
    {
        try {
            $response = $this->client->request('POST', $url, [
                'form_params' => $params
            ]);

            return $response->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            throw new ApiException($e->getMessage(), $e->getCode(), $e);
        } catch (\Throwable $e) {
            throw new ApiException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
