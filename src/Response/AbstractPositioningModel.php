<?php

namespace App\Response;

abstract class AbstractPositioningModel
{
    /**
     * Checks if model is complete (properties are not null and arrays non-empty)
     *
     * @return bool
     */
    public function isComplete(): bool
    {
        return true;
    }

    /**
     * Returns the progress for this model between 0 and 1 (complete)
     *
     * @return float
     */
    public function getProgress(): float
    {
        return 1.0;
    }
}
