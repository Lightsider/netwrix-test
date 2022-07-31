<?php
declare(strict_types=1);

namespace App\Classes\Filters;

use App\Classes\Filters\Abstracts\AbstractFilter;
use App\Classes\Filters\Types\KeyValueWhereFilterType;

class CountryFilter extends AbstractFilter
{
    private string $field = 'short_name';

    public function __construct(
        private string $value
    ) {
    }

    public function getFilters(): array
    {
        $filters = [];

        if (!empty($this->value)) {
            $filters[] = new KeyValueWhereFilterType($this->field, $this->value);
        }

        return $filters;
    }
}
