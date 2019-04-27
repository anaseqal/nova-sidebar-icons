<?php

namespace Anaseqal\NovaSidebarIcons;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Anaseqal\NovaSidebarIcons\Http\Middleware\Authorize;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views/resources' => resource_path('views/vendor/nova/resources'),
            ], 'nova-views');
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova-sidebar-icons');

        Nova::serving(function (ServingNova $event) {
            //
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
