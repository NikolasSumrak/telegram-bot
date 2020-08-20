<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Sumrak\TelegramBot\ApiAdapter;
use Sumrak\TelegramBot\ApiAdapterInterface;
use Sumrak\TelegramBot\GuzzleHttpClient;
use Sumrak\TelegramBot\HttpClientInterface;
use Sumrak\TelegramBot\Serializer\TelegramApiSerializer;
use Sumrak\TelegramBot\Serializer\TelegramApiSerializerInterface;
use Sumrak\TelegramBot\TelegramBotContext;

/**
 * @see TelegramBotContext
 */
class TelegramBotContextTest extends TestCase
{
    /**
     * @covers \Sumrak\TelegramBot\TelegramBotContext::getApiAdapter
     */
    public function testGetBotToken()
    {
        $model = new TelegramBotContext('BOT_TOKEN');
        $this->assertSame('BOT_TOKEN', $model->getBotToken());
    }

    /**
     * @covers \Sumrak\TelegramBot\TelegramBotContext::getApiAdapter
     */
    public function testGetApiAdapterWithParam()
    {
        $apiAdapterMock = $this->createMock(ApiAdapterInterface::class);
        $model = new TelegramBotContext('BOT_TOKEN', $apiAdapterMock);
        $this->assertSame($apiAdapterMock, $model->getApiAdapter());
    }

    /**
     * @covers \Sumrak\TelegramBot\TelegramBotContext::getApiAdapter
     */
    public function testGetApiAdapter()
    {
        $model = new TelegramBotContext('BOT_TOKEN');
        $this->assertInstanceOf(ApiAdapter::class, $model->getApiAdapter());
    }

    /**
     * @covers \Sumrak\TelegramBot\TelegramBotContext::getHttpClient
     */
    public function testGetHttpClientWithParam()
    {
        $httpClientMock = $this->createMock(HttpClientInterface::class);
        $model = new TelegramBotContext('BOT_TOKEN', null, $httpClientMock);
        $this->assertSame($httpClientMock, $model->getHttpClient());
    }

    /**
     * @covers \Sumrak\TelegramBot\TelegramBotContext::getHttpClient
     */
    public function testGetHttpClient()
    {
        $model = new TelegramBotContext('BOT_TOKEN');
        $this->assertInstanceOf(GuzzleHttpClient::class, $model->getHttpClient());
    }

    /**
     * @covers \Sumrak\TelegramBot\TelegramBotContext::getSerializer
     */
    public function testGetSerializerWithParam()
    {
        $serializerMock = $this->createMock(TelegramApiSerializerInterface::class);
        $model = new TelegramBotContext('BOT_TOKEN', null, null, $serializerMock);
        $this->assertSame($serializerMock, $model->getSerializer());
    }

    /**
     * @covers \Sumrak\TelegramBot\TelegramBotContext::getSerializer
     */
    public function testGetSerializer()
    {
        $model = new TelegramBotContext('BOT_TOKEN');
        $this->assertInstanceOf(TelegramApiSerializer::class, $model->getSerializer());
    }
}
