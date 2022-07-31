<?php

namespace App\Classes\Filters\Types;


use App\Classes\Filters\Abstracts\AbstractFilterType;
use Illuminate\Database\Eloquent\Builder;

class OrWhereLikeFilterType extends AbstractFilterType
{
    public function __construct(
        private array $conditions
    )
    {
    }

    /**
     * @return Builder
     */
    public function filter($query): Builder
    {
        $result = $query;

        foreach ($this->conditions as $field => $value) {
            $result = $query->orWhere(function ($query) use ($field, $value) {
                $query->where($field, 'like', '%' . $value . '%');
            });
        }

        return $result;
    }
}
