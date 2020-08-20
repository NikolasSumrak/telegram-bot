<?php

namespace Sumrak\TelegramBot\Serializer;

use Sumrak\TelegramBot\Entity\EntityInterface;

interface TelegramApiSerializerInterface
{
    /**
     * @param string $type
     * @param string $response
     * @return EntityInterface|EntityInterface[]|mixed
     */
    public function deserialize(string $type, string $response);

    /**
     * @param EntityInterface|EntityInterface[] $object
     * @return string
     */
    public function serialize($object): string;
}
