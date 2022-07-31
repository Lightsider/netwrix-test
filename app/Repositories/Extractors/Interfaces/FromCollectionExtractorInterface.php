<?php

namespace App\Repositories\Extractors\Interfaces;

use Illuminate\Support\Collection;

interface FromCollectionExtractorInterface
{
    public function fromCollection(Collection $collection): Collection;
}
