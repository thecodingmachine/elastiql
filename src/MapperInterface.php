<?php

declare(strict_types=1);

namespace TheCodingMachine\ElastiQL;

interface MapperInterface
{
    /**
     * @return array<string, mixed> Returns the index
     */
    public function getIndex(string $query, string $className): array;

    /**
     * Returns a PHP array representing the serialized record ready to be stored in Elasticsearch.
     *
     * @return array<string, mixed>
     */
    public function getRecord(string $query, object $object): array;
}
