<?php

namespace App\Services;

use App\Services\Interfaces\ResponseServiceInterface;
use Illuminate\Http\JsonResponse;

class JsonResponseService implements ResponseServiceInterface
{
    public function success(array $data): JsonResponse
    {
        return response()->json($data, self::STATUS_SUCCESS);
    }

    public function fail(array $data): JsonResponse
    {
        return response()->json($data, self::STATUS_FAIL);
    }
}
