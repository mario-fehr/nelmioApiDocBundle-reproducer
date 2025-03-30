<?php

namespace App\Response;

use OpenApi\Attributes\Property;

/**
 * @extends PaginatedResponse<User>
 */
readonly class UserResponse extends PaginatedResponse
{
    public function __construct(
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
