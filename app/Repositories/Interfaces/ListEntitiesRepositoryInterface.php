<?php

namespace App\Repositories\Interfaces;

use App\Classes\Filters\Abstracts\AbstractFilter;
use Illuminate\Support\Collection;

interface ListEntitiesRepositoryInterface
{
    public function getList(AbstractFilter $filter): Collection;
}
