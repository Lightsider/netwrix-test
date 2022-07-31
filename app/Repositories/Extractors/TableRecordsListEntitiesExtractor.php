<?php
declare(strict_types=1);

namespace App\Repositories\Extractors;

use App\Repositories\DTO\ListEntitiesDTO;
use App\Repositories\Extractors\Interfaces\FromCollectionExtractorInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use RuntimeException;

class TableRecordsListEntitiesExtractor implements FromCollectionExtractorInterface
{
    /**
     * @param Collection $collection
     * @return Collection[ListEntitiesDTO]
     */
    public function fromCollection(Collection $collection): Collection
    {
        $result = new Collection();

        foreach ($collection as $item) {

            if (!is_a($item,Model::class) || empty($item->shortName) || empty($item->name)) {
                throw new RuntimeException('Wrong table records list entity ' . json_encode($item));
            }

            $result->add(new ListEntitiesDTO($item->shortName, $item->name));
        }

        return $result;
    }
}
