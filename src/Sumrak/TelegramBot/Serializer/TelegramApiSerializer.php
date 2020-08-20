<?php

namespace Sumrak\TelegramBot\Serializer;

use Sumrak\TelegramBot\Entity\EntityInterface;
use Sumrak\TelegramBot\Serializer\Normalizer\CustomObjectNormalizer;
use Sumrak\TelegramBot\Serializer\Normalizer\ResultNormalizer;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\Serializer;

class TelegramApiSerializer implements TelegramApiSerializerInterface
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @param string $type
     * @param string $response
     *
     * @return EntityInterface|EntityInterface[]
     */
    public function deserialize(string $type, string $response)
    {
        return $this->getSerializer()->deserialize($response, $type, 'json');
    }

    /**
     * @param EntityInterface|EntityInterface[] $data
     * @return string
     */
    public function serialize($data): string
    {
        return $this->getSerializer()->serialize($data, 'json');
    }

    /**
     * @return Serializer
     */
    private function getSerializer(): Serializer
    {
        if ($this->serializer === null) {
            $encoders = [new JsonEncoder()];
            $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
            $normalizers = [
                new ResultNormalizer(),
                new CustomObjectNormalizer(
                    null,
                    new CamelCaseToSnakeCaseNameConverter(),
                    null,
                    $extractor
                )
            ];
            $this->serializer = new Serializer($normalizers, $encoders);
        }

        return $this->serializer;
    }
}
