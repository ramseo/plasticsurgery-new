<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;

class AgentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $agent = new Agent();

        View::share('agent', $agent);
    }
}
