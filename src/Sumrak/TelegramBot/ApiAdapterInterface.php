<?php

namespace Sumrak\TelegramBot;

use Sumrak\TelegramBot\Serializer\TelegramApiSerializerInterface;

interface ApiAdapterInterface
{
    /**
     * @param string $token
     */
    public function setBotToken(string $token): void;

    /**
     * @param HttpClientInterface $client
     */
    public function setClient(HttpClientInterface $client): void;

    /**
     * @param TelegramApiSerializerInterface $telegramApiSerializer
     */
    public function setSerializer(TelegramApiSerializerInterface $telegramApiSerializer): void;

    /**
     * @param string $methodNameName
     * @param array $params
     * @return string
     */
    public function call(string $methodNameName, array $params = []): string;
}
