<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Sumrak\TelegramBot\ApiAdapter;
use Sumrak\TelegramBot\Entity\EntityInterface;
use Sumrak\TelegramBot\HttpClientInterface;
use Sumrak\TelegramBot\Serializer\TelegramApiSerializerInterface;

/**
 * @see ApiAdapter
 */
class ApiAdapterTest extends TestCase
{
    private $model;

    protected function setUp(): void
    {
        $this->model = new ApiAdapter();
    }

    /**
     * @covers \Sumrak\TelegramBot\ApiAdapter::call
     */
    public function testCallWithoutToken()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Telegram bot token is not set');
        $this->model->call('method', []);
    }

    /**
     * @covers \Sumrak\TelegramBot\ApiAdapter::call
     */
    public function testCallWithoutClient()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('HTTP Client is not set');

        $this->model->setBotToken('asd');
        $this->model->call('method', []);
    }

    /**
     * @covers \Sumrak\TelegramBot\ApiAdapter::call
     */
    public function testCallWithoutSerializer()
    {
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Serializer is not set');

        $client = $this->createMock(HttpClientInterface::class);

        $this->model->setBotToken('asd');
        $this->model->setClient($client);
        $this->model->call('method', []);
    }

    /**
     * @covers \Sumrak\TelegramBot\ApiAdapter::call
     */
    public function testCallCorrect()
    {
        $botToken = 'tgBotApiToken';
        $method = 'superMethod';
        $params = [
            'a' => 'a',
            'b' => 'b',
            3 => 3
        ];
        $client = $this->createMock(HttpClientInterface::class);
        $client
            ->expects($this->once())
            ->method('call')
            ->with('https://api.telegram.org/bot' . $botToken . '/' . $method, $params)
            ->willReturn('resultString');

        $this->model->setBotToken($botToken);
        $this->model->setClient($client);

        $serializerMock = $this->createMock(TelegramApiSerializerInterface::class);
        $this->model->setSerializer($serializerMock);

        $result = $this->model->call($method, $params);

        $this->assertEquals('resultString', $result);
    }

    /**
     * @covers \Sumrak\TelegramBot\ApiAdapter::prepareParams
     */
    public function testPrepareParams()
    {
        $serializerMock = $this->createMock(TelegramApiSerializerInterface::class);

        $param1 = $this->createMock(EntityInterface::class);
        $param2 = $this->createMock(EntityInterface::class);
        $param3 = $this->createMock(EntityInterface::class);
        $serializerMock
            ->expects($this->any())
            ->method('serialize')
            ->willReturnCallback(function ($param) use ($param1, $param2, $param3) {
                switch (true) {
                    case $param1 === $param:
                        return 'STRING_PARAM_1';
                    case $param2 === $param:
                        return 'STRING_PARAM_2';
                    case $param3 === $param:
                        return 'STRING_PARAM_3';
                }

                return null;
            });

        $this->model->setSerializer($serializerMock);
        $params = [
            'param1' => $param1,
            'param2' => $param2,
            'param3' => 1,
            'param4' => 2,
            'param5' => [
                'sub_param1' => $param3
            ]
        ];

        $actual = $this->model->prepareParams($params);

        $this->assertEquals(
            [
                'param1' => 'STRING_PARAM_1',
                'param2' => 'STRING_PARAM_2',
                'param3' => 1,
                'param4' => 2,
                'param5' => [
                    'sub_param1' => 'STRING_PARAM_3'
                ]
            ],
            $actual
        );
    }

    /**
     * @covers \Sumrak\TelegramBot\ApiAdapter::setBotToken
     */
    public function testSetBotToken()
    {
        $this->model->setBotToken('asdasdasd');
        $resultValue = $this->getPropertyValue($this->model, 'token');

        $this->assertSame('asdasdasd', $resultValue);
    }

    /**
     * @covers \Sumrak\TelegramBot\ApiAdapter::setClient
     */
    public function testSetClient()
    {
        $clientMock = $this->createMock(HttpClientInterface::class);
        $this->model->setClient($clientMock);
        $resultValue = $this->getPropertyValue(
            $this->model,
            'client'
        );

        $this->assertSame($clientMock, $resultValue);
    }

    /**
     * @covers \Sumrak\TelegramBot\ApiAdapter::setSerializer
     */
    public function testSetSerializer()
    {
        $serializerMock = $this->createMock(TelegramApiSerializerInterface::class);
        $this->model->setSerializer($serializerMock);
        $resultValue = $this->getPropertyValue(
            $this->model,
            'serializer'
        );

        $this->assertSame($serializerMock, $resultValue);
    }

    /**
     * @param object $object
     * @param string $propertyName
     * @return mixed
     */
    private function getPropertyValue($object, $propertyName)
    {
        $reflectionClass = new \ReflectionClass(get_class($object));
        $property = $reflectionClass->getProperty($propertyName);
        $property->setAccessible(true);

        return $property->getValue($object);
    }
}
