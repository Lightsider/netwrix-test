<?php

namespace App\Classes\Filters\Types;


use App\Classes\Filters\Abstracts\AbstractFilterType;
use Illuminate\Database\Eloquent\Builder as ElBuilder;

class KeyValueWhereLikeFilterType extends AbstractFilterType
{
    public function __construct(
        private string $key,
        private string $value
    )
    {
    }

    /**
     * @return ElBuilder
     */
    public function filter($query): ElBuilder
    {
        return $query->where($this->key, 'like', '%' . $this->value . '%');
    }
}
