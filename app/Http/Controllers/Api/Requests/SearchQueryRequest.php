<?php

namespace App\Http\Controllers\Api\Requests;

use Illuminate\Http\Request;

class SearchQueryRequest
{
    public function __construct(
        public string $query,
        public string $type,
        public string $countryCode,
        public string $stateCode
    )
    {
    }

    /**
     * @param Request $request
     * @return static
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            $request->get('query') ?? '',
            $request->get('type') ?? '',
            $request->get('countryCode') ?? '',
            $request->get('stateCode') ?? '',
        );
    }
}
