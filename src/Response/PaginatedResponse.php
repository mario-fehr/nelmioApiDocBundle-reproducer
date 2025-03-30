<?php

namespace App\Response;

/**
 * @template TData
 */
readonly abstract class PaginatedResponse
{
    /**
     * @param list<TData> $items
     */
    public function __construct(
        /** @var list<TData> $items */
        public array $items,
        public int $totalCount,
    ) {
    }
}
