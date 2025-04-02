<?php

namespace App\Response;

use OpenApi\Attributes as OA;
use Symfony\Component\Serializer\Attribute\SerializedName;

class BusinessModel extends AbstractPositioningModel
{
    /**
     *
     * @return float
     */
    #[SerializedName("progress")]
    public function getProgress(): float
    {
        return 1.0;
    }
}
