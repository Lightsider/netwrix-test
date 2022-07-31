<?php

namespace App\Http\Controllers\Api\Responses\DTO;

use Illuminate\Support\Collection;
use JetBrains\PhpStorm\ArrayShape;

class SearchParamsDTO
{
    public function __construct(
        private Collection $types,
        private Collection $countries,
        private Collection $states
    )
    {
    }

    #[ArrayShape(['types' => 'Collection', 'countries' => "Collection", 'states' => "Collection"])]
    public function toArray(): array
    {
        return [
            'types' => $this->types->toArray(),
            'countries' => $this->countries->toArray(),
            'states' => $this->states->toArray(),
        ];
    }
}
