<?php

namespace Sumrak\TelegramBot\Serializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;

class ResultNormalizer extends ArrayDenormalizer
{

    /**
     * @param array $data
     * @param string $type
     * @param string|null $format
     * @param array $context
     * @return array|mixed|object
     */
    public function denormalize($data, string $type, string $format = null, array $context = [])
    {
        if (!empty($data['ok']) && isset($data['result'])) {
            $data = $data['result'];
        }
        return parent::denormalize($data, $type, $format, $context);
    }
}
