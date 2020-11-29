<?php

namespace Wakjoko\LumenRoutesList;

use Illuminate\Support\ServiceProvider;

class RoutesCommandServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('Wakjoko\LumenRoutesList\RoutesCommand');
    }
}
