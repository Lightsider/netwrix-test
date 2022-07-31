<?php

namespace App\Classes\Filters\Types;


use App\Classes\Filters\Abstracts\AbstractFilterType;

class KeyValueWhereFilterType extends AbstractFilterType
{
    public function __construct(
        private string $key,
        private string $value
    )
    {
    }

    /**
     * @param $query
     */
    public function filter($query)
    {
        return $query->where($this->key, $this->value);
    }
}
