<?php
declare(strict_types=1);

namespace App\Classes\Filters;

use App\Classes\Filters\Abstracts\AbstractFilter;
use App\Classes\Filters\Types\KeyValueWhereFilterType;
use App\Classes\Filters\Types\RelationWhereInFilterType;
use App\Models\LocCountry;

class StateFilter extends AbstractFilter
{
    private string $currentFilterField = 'country_id';

    private string $relationTable = 'loc_country';

    private string $relationFilterField = 'short_name';

    private string $relationReturnField = 'country_id';

    public function __construct(
        private string $value,
        private string $countryCode
    ) {
    }

    public function getFilters(): array
    {

        $filters = [];

        if (!empty($this->value)) {
            $filters[] = new KeyValueWhereFilterType($this->relationFilterField, $this->value);
        }

        if (!empty($this->countryCode)) {
            $filters[] = new RelationWhereInFilterType(
                $this->currentFilterField,
                $this->relationTable,
                $this->relationFilterField,
                $this->countryCode,
                $this->relationReturnField
            );
        }

        return $filters;
    }
}
