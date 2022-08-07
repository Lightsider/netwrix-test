<?php
declare(strict_types=1);

namespace App\Services;

use App\Classes\Filters\CountryFilter;
use App\Classes\Filters\SearchQueryFilter;
use App\Classes\Filters\StateFilter;
use App\Classes\Filters\TypesFilter;
use App\Http\Controllers\Api\Requests\SearchQueryRequest;
use App\Http\Controllers\Api\Responses\DTO\SearchParamsDTO;
use App\Http\Controllers\Api\Responses\SearchQueryResponse;
use App\Models\PartnerLocator;
use App\Repositories\LocCountryListEntitiesRepository;
use App\Repositories\LocStateListEntitiesRepository;
use App\Repositories\TypesListEntitiesRepository;
use App\Services\Interfaces\ResponseServiceInterface;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class SearchService
{
    public function __construct(
        private ResponseServiceInterface         $responseService,
        private TypesListEntitiesRepository      $typesRepository,
        private LocStateListEntitiesRepository   $locStateRepository,
        private LocCountryListEntitiesRepository $locCountryRepository
    )
    {
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function makeSearchQueryResponse(Request $request): mixed
    {
        $request = SearchQueryRequest::fromRequest($request);

        $response = new SearchQueryResponse(
            $this->getPartners($request),
            $this->getParams($request)
        );

        return $this->responseService->success(
            $response->toArray()
        );
    }

    /**
     * @param SearchQueryRequest $request
     * @return Collection
     */
    private function getPartners(SearchQueryRequest $request): Collection
    {
        $query = PartnerLocator::query();

        $filters = (new SearchQueryFilter($request))->getFilters();

        foreach ($filters as $currentFilter) {
            $query = $query->where(function ($query) use ($currentFilter) {
                $currentFilter->filter($query);
            });
        }

        return $query->get();
    }

    /**
     * @param SearchQueryRequest $request
     * @return SearchParamsDTO
     */
    private function getParams(SearchQueryRequest $request): SearchParamsDTO
    {
        return new SearchParamsDTO(
            $this->typesRepository->getList(),
            $this->locCountryRepository->getList(),
            $this->locStateRepository->getList(new StateFilter($request->stateCode, $request->countryCode)),
        );
    }
}
