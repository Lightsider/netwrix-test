<?php

namespace App\Http\Controllers\Api\Responses;

use App\Http\Controllers\Api\Responses\DTO\SearchParamsDTO;
use Illuminate\Support\Collection;
use JetBrains\PhpStorm\ArrayShape;

class SearchQueryResponse
{
    public function __construct(
        private Collection      $partners,
        private SearchParamsDTO $params,
    )
    {
    }

    #[ArrayShape(['partners' => "array", 'params' => "array"])]
    public function toArray(): array
    {
        return [
            'partners' => $this->partners->toArray(),
            'params' => $this->params->toArray(),
        ];
    }
}
