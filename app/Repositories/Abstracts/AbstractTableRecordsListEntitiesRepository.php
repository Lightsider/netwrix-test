<?php
declare(strict_types=1);

namespace App\Repositories\Abstracts;

use App\Classes\Filters\Abstracts\AbstractFilter;
use App\Repositories\Extractors\TableRecordsListEntitiesExtractor;
use App\Repositories\Interfaces\ListEntitiesRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class AbstractTableRecordsListEntitiesRepository implements ListEntitiesRepositoryInterface
{
    public function __construct(
        protected Model                             $model,
        protected TableRecordsListEntitiesExtractor $extractor
    )
    {
    }

    /**
     * @param ?AbstractFilter $filter
     * @return Collection
     */
    public function getList(?AbstractFilter $filter = null): Collection
    {
        $query = $this->model::query();

        if (!empty($filter)) {
            foreach ($filter->getFilters() as $currentFilter) {
                $query = $currentFilter->filter($query);
            }
        }

        return $this->extractor->fromCollection(
            $query->get()
        );
    }
}
