<?php
declare(strict_types=1);

namespace App\Providers;
use App\Services\Interfaces\ResponseServiceInterface;
use App\Services\JsonResponseService;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            ResponseServiceInterface::class,
            JsonResponseService::class
        );
    }
}
