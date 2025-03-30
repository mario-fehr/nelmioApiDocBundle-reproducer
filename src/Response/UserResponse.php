<?php

namespace App\Response;

use OpenApi\Attributes\Property;

/**
 * @extends PaginatedResponse<User>
 */
readonly class UserResponse extends PaginatedResponse
{
    public function __construct(
        /** @var list<User> $items */
        #[Property(description: "List of users")]
        public array $items,
        int $totalCount,
    ) {
        parent::__construct(
            $items,
            $totalCount
        );
    }
}
