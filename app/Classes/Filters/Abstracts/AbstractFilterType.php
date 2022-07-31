<?php
declare(strict_types=1);

namespace App\Classes\Filters\Abstracts;

abstract class AbstractFilterType
{
    abstract public function filter($query);
}
