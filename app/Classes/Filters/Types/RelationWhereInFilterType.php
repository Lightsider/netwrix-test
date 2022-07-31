<?php
declare(strict_types=1);

namespace App\Classes\Filters\Types;


use App\Classes\Filters\Abstracts\AbstractFilterType;
use Illuminate\Database\Query\Builder;

class RelationWhereInFilterType extends AbstractFilterType
{
    public function __construct(
        private string $currentFilterField,
        private string $table,
        private string $relationFilterField,
        private string $value,
        private string $relationSelectField,
    )
    {
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function filter($query)
    {
        $currentFilterField = $this->currentFilterField;
        $table = $this->table;
        $relationFilterField = $this->relationFilterField;
        $value = $this->value;
        $relationSelectField = $this->relationSelectField;

        return $query->whereIn($currentFilterField,
            function (Builder $query) use ($table, $relationFilterField, $value, $relationSelectField) {
                $query->select($relationSelectField)
                    ->from($table)
                    ->where($relationFilterField, $value)
                    ->get();
            }
        );
    }
}
