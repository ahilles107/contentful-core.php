<?php

/**
 * This file is part of the contentful/contentful-core package.
 *
 * @copyright 2015-2022 Contentful GmbH
 * @license   MIT
 */

declare(strict_types=1);

namespace Contentful\Tests\Core\Implementation;

use Contentful\Core\Resource\BaseResourcePool;
use Contentful\Core\Resource\ResourceInterface;

class ResourcePool extends BaseResourcePool
{
    /**
     * {@inheritdoc}
     */
    public function sanitize(string $value): string
    {
        return parent::sanitize($value);
    }

    /**
     * {@inheritdoc}
     */
    public function save(ResourceInterface $resource): bool
    {
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $type, string $id, array $options = []): ResourceInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function has(string $type, string $id, array $options = []): bool
    {
    }

    /**
     * {@inheritdoc}
     */
    public function generateKey(string $type, string $id, array $options = []): string
    {
    }
}
