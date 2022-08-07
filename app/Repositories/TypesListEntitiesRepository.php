<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Classes\Filters\Abstracts\AbstractFilter;
use App\Repositories\Extractors\TypesListEntitiesExtractor;
use App\Repositories\Interfaces\ListEntitiesRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

final class TypesListEntitiesRepository implements ListEntitiesRepositoryInterface
{
    public function __construct(
        private TypesListEntitiesExtractor $extractor
    )
    {
    }

    /**
     * @param ?AbstractFilter $filter
     * @return Collection
     */
    public function getList(?AbstractFilter $filter = null): Collection
    {
        $query = DB::table('partner_locator')
                ->select('status');

        if (!empty($filter)) {
            foreach ($filter->getFilters() as $currentFilter) {
                $query = $currentFilter->filter($query);
            }
        }

        return $this->extractor->fromCollection(
            $query
                ->groupBy('status')
                ->get()
        );
    }
}
