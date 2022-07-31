<?php

namespace App\Repositories\Extractors;

use App\Repositories\DTO\ListEntitiesDTO;
use App\Repositories\Extractors\Interfaces\FromCollectionExtractorInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use RuntimeException;

class TypesListEntitiesExtractor implements FromCollectionExtractorInterface
{
    /**
     * @param Collection $collection
     * @return Collection[ListEntitiesDTO]
     */
    public function fromCollection(Collection $collection): Collection
    {
        $result = new Collection();

        foreach ($collection as $item) {

            if (empty($item->status)) {
                throw new RuntimeException('Wrong types list entity' . json_encode($item));
            }

            $result->add(new ListEntitiesDTO($item->status, $item->status));
        }

        return $result;
    }
}
