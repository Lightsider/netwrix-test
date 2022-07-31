<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SearchService;
use Illuminate\Http\JsonResponse;

class SearchController extends Controller
{
    public function __construct(
        private SearchService $searchService
    )
    {
    }

    /**
     * Return result for search query
     *
     * @return JsonResponse
     */
    public function query()
    {
        return $this->searchService->makeSearchQueryResponse(request());
    }
}
