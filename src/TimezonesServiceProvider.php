<?php

namespace ShoutLara\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('ShoutLara\Timezones\TimezonesController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
        __DIR__.'/views' => base_path('resources/views/vendor/timezones'),
    ]);
       $this->loadViewsFrom(__DIR__.'/views', 'timezones');
    }
}
