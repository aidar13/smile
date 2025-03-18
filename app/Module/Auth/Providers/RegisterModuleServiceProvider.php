<?php

declare(strict_types=1);

namespace App\Module\Auth\Providers;

use Illuminate\Support\ServiceProvider;

final class RegisterModuleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(CommandBusServiceProviders::class);
    }
}
