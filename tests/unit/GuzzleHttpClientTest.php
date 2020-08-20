<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Tests\Unit;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use Sumrak\TelegramBot\Exception\ApiException;
use Sumrak\TelegramBot\GuzzleHttpClient;

/**
 * @see GuzzleHttpClient
 */
class GuzzleHttpClientTest extends TestCase
{
    /**
     * @covers \Sumrak\TelegramBot\GuzzleHttpClient::__construct
     */
    public function testCreating()
    {
        $client = $this->createMock(\GuzzleHttp\Client::class);
        $model = new GuzzleHttpClient($client);
        $clientResult = $this->getPropertyValue($model, 'client');

        $this->assertSame($client, $clientResult);

        $model2 = new GuzzleHttpClient(null);
        $clientResult2 = $this->getPropertyValue($model2, 'client');
        $this->assertInstanceOf(Client::class, $clientResult2);

        $model3 = new GuzzleHttpClient();
        $clientResult3 = $this->getPropertyValue($model3, 'client');
        $this->assertInstanceOf(Client::class, $clientResult3);
    }

    /**
     * @covers \Sumrak\TelegramBot\GuzzleHttpClient::call
     */
    public function testCall()
    {
        $url = 'asdasdasdasd';
        $params = [
            'a' => 'a',
            'b' => 'b',
            'test' => 'test',
            3 => 4
        ];
        $content = $this->createMock(\Psr\Http\Message\StreamInterface::class);
        $content->expects($this->once())
            ->method('getContents')
            ->willReturn('responseString');

        $response = $this->createMock(\Psr\Http\Message\MessageInterface::class);
        $response->expects($this->once())
            ->method('getBody')
            ->willReturn($content);
        $client = $this->createMock(\GuzzleHttp\Client::class);
        $client->expects($this->once())
            ->method('request')
            ->with('POST', $url, [
                'form_params' => $params
            ])
            ->willReturn($response);

        $model = new GuzzleHttpClient($client);
        $response = $model->call($url, $params);

        $this->assertEquals('responseString', $response);
    }

    /**
     * @covers \Sumrak\TelegramBot\GuzzleHttpClient::call
     */
    public function testCallWithGuzzleException()
    {
        $this->expectException(ApiException::class);

        $guzzleExceptionMock = $this->createMock(\GuzzleHttp\Exception\GuzzleException::class);
        $client = $this->createMock(\GuzzleHttp\Client::class);
        $client->expects($this->once())
            ->method('request')
            ->willThrowException($guzzleExceptionMock);

        $model = new GuzzleHttpClient($client);
        $model->call('a', []);
    }

    /**
     * @covers \Sumrak\TelegramBot\GuzzleHttpClient::call
     */
    public function testCallWithUnknownException()
    {
        $this->expectException(ApiException::class);

        $client = $this->createMock(\GuzzleHttp\Client::class);
        $client->expects($this->once())
            ->method('request')
            ->willThrowException(new \Exception());

        $model = new GuzzleHttpClient($client);
        $model->call('a', []);
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
