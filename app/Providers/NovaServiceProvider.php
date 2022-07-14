<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\{Nova, NovaApplicationServiceProvider};

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    public function boot(): void
    {
        parent::boot();
    }

    protected function routes(): void
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    protected function gate(): void
    {
        Gate::define('viewNova', fn ($user) => true);
    }

    protected function dashboards(): array
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    public function tools(): array
    {
        return [];
    }

    public function register(): void
    {
        //
    }
}
