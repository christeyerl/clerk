<?php

namespace App\Nova\Dashboards;

use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    public function name(): string
    {
        return __('Dashboard');
    }

    public function cards(): array
    {
        return [
            //
        ];
    }
}
