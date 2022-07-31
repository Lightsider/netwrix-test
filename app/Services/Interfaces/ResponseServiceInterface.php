<?php
declare(strict_types=1);

namespace App\Services\Interfaces;

interface ResponseServiceInterface
{
    CONST STATUS_SUCCESS = 200;

    CONST STATUS_FAIL = 400;

    public function success(array $data);

    public function fail(array $data);
}
