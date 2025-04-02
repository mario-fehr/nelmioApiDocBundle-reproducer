<?php

namespace App\Response;

class Positioning
{
    protected BusinessModel $businessModel;

    public function __construct(?BusinessModel $businessModel){
        $this->businessModel = $businessModel ?? new BusinessModel();
    }

    public function getBusinessModel(): BusinessModel {
        return $this->businessModel;
    }
}
