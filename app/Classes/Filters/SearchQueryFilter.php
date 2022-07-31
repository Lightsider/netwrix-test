<?php
declare(strict_types=1);

namespace App\Classes\Filters;

use App\Classes\Filters\Abstracts\AbstractFilter;
use App\Classes\Filters\Types\KeyValueWhereFilterType;
use App\Classes\Filters\Types\KeyValueWhereLikeFilterType;
use App\Classes\Filters\Types\OrWhereLikeFilterType;
use App\Http\Controllers\Api\Requests\SearchQueryRequest;

class SearchQueryFilter extends AbstractFilter
{
    public function __construct(
        private SearchQueryRequest $request
    ) {
    }

    public function getFilters(): array
    {
        $filters = [];

        if (!empty($this->request->query)) {
            $filters[] = new OrWhereLikeFilterType(
                [
                    'company' => $this->request->query,
                    'address' => $this->request->query,
                ]
            );
        }

        if (!empty($this->request->type)) {
            $filters[] = new KeyValueWhereFilterType('status', $this->request->type);
        }

        if (!empty($this->request->countryCode)) {
            $filters[] = new KeyValueWhereLikeFilterType('countries_covered', $this->request->countryCode);
        }

        if (!empty($this->request->stateCode)) {
            $filters[] = new KeyValueWhereLikeFilterType('states_covered', $this->request->stateCode);
        }

        return $filters;
    }
}
