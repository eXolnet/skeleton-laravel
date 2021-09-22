<?php

namespace Exolnet\Skeleton;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->offerPublishing();
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        //$this->mergeConfigFrom(__DIR__.'/../config/config.php', 'skeleton');

        $this->app->bind('skeleton', function () {
            return new SkeletonClass();
        });
    }

    /**
     * @return void
     */
    protected function offerPublishing(): void
    {
        /*$this->publishes([
            __DIR__.'/../config/skeleton.php' => config_path('skeleton.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'skeleton');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/skeleton'),
        ], 'views');*/
    }
}
