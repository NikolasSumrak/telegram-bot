<?php

declare(strict_types=1);

namespace Sumrak\TelegramBot\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Sumrak\TelegramBot\GuzzleHttpClient;

/**
 * @see GuzzleHttpClient
 */
class GuzzleHttpClientTest extends TestCase
{
    /**
     * @covers GuzzleHttpClient::call
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
}
