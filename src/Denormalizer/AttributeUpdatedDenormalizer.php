<?php

namespace Sylake\SyliusConsumerPlugin\Denormalizer;

use Sylake\SyliusConsumerPlugin\Event\AttributeUpdated;
use Sylake\SyliusConsumerPlugin\Model\Translations;

final class AttributeUpdatedDenormalizer extends AkeneoDenormalizer
{
    /**
     * {@inheritdoc}
     */
    protected function denormalizePayload(array $payload)
    {
        return new AttributeUpdated($payload['code'], $payload['type'], new Translations($payload['labels']));
    }

    /**
     * {@inheritdoc}
     */
    protected function getSupportedMessageType(): string
    {
        return MessageType::ATTRIBUTE_UPDATED_MESSAGE_TYPE;
    }
}