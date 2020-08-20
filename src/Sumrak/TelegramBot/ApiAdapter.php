<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot;

use Sumrak\TelegramBot\Entity\EntityInterface;
use Sumrak\TelegramBot\Serializer\TelegramApiSerializerInterface;

class ApiAdapter implements ApiAdapterInterface
{
    public const TELEGRAM_API_URL = 'https://api.telegram.org/bot';

    /**
     * @var string
     */
    private $token;

    /**
     * @var HttpClientInterface
     */
    private $client;

    /**
     * @var TelegramApiSerializerInterface
     */
    private $serializer;

    /**
     * @param string $methodName
     * @param array $params
     * @throws \RuntimeException
     *
     * @return string
     */
    public function call(string $methodName, array $params = []): string
    {
        if (empty($this->token)) {
            throw new \RuntimeException('Telegram bot token is not set');
        }

        if (empty($this->client)) {
            throw new \RuntimeException('HTTP Client is not set');
        }

        if (empty($this->serializer)) {
            throw new \RuntimeException('Serializer is not set');
        }

        $params = $this->prepareParams($params);

        return $this->client->call($this->getUrl($methodName), $params);
    }

    /**
     * @param string $token
     */
    public function setBotToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @param HttpClientInterface $client
     */
    public function setClient(HttpClientInterface $client): void
    {
        $this->client = $client;
    }

    public function setSerializer(TelegramApiSerializerInterface $telegramApiSerializer): void
    {
        $this->serializer = $telegramApiSerializer;
    }

    /**
     * @param string $method
     * @return string
     */
    private function getUrl(string $method): string
    {
        return static::TELEGRAM_API_URL . $this->token . '/' . $method;
    }

    /**
     * @TODO move to another service
     * @param array $params
     * @return array
     */
    public function prepareParams(array $params): array
    {
        foreach ($params as &$param) {
            if ($param instanceof EntityInterface) {
                $param = $this->serializer->serialize($param);
            }

            if (is_array($param)) {
                $param = $this->prepareParams($param);
            }
        }

        return $params;
    }
}
