<?php

namespace App\Repositories\DTO;

class ListEntitiesDTO
{
    public function __construct(
        public string $value,
        public string $label,
    )
    {
    }

}
