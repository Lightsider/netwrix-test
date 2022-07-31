<?php
declare(strict_types=1);

namespace App\Classes\Filters\Abstracts;

abstract class AbstractFilter
{
    abstract public function getFilters(): array;
}
