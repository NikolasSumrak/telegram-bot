<?php

namespace Sumrak\TelegramBot;

use Sumrak\TelegramBot\Exception\ApiException;

interface HttpClientInterface
{
    /**
     * @param string $url
     * @param array $params
     * @return string
     * @throws ApiException
     */
    public function call(string $url, array $params = []): string;
}
