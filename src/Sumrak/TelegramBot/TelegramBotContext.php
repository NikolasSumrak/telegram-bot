<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot;

use Sumrak\TelegramBot\Serializer\TelegramApiSerializer;
use Sumrak\TelegramBot\Serializer\TelegramApiSerializerInterface;

class TelegramBotContext
{
    /**
     * @var ApiAdapterInterface|null
     */
    private $apiAdapter;

    /**
     * @var HttpClientInterface|null
     */
    private $httpClient;

    /**
     * @var TelegramApiSerializerInterface|null
     */
    private $serializer;

    /**
     * @var string
     */
    private $botToken;

    public function __construct(
        string $botToken,
        ?ApiAdapterInterface $apiAdapter = null,
        ?HttpClientInterface $httpClient = null,
        ?TelegramApiSerializerInterface $serializer = null
    ) {
        $this->apiAdapter = $apiAdapter;
        $this->httpClient = $httpClient;
        $this->serializer = $serializer;
        $this->botToken = $botToken;
    }

    /**
     * @return ApiAdapterInterface
     */
    public function getApiAdapter(): ApiAdapterInterface
    {
        return $this->apiAdapter ?? new ApiAdapter();
    }

    /**
     * @return HttpClientInterface
     */
    public function getHttpClient(): HttpClientInterface
    {
        return $this->httpClient ?? new GuzzleHttpClient();
    }

    /**
     * @return TelegramApiSerializerInterface
     */
    public function getSerializer(): TelegramApiSerializerInterface
    {
        return $this->serializer ?? new TelegramApiSerializer();
    }

    /**
     * @return string
     */
    public function getBotToken(): string
    {
        return $this->botToken;
    }
}
