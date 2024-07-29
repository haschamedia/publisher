<?php

namespace Publisher;

use Illuminate\Support\ServiceProvider;

class PublisherServiceProvider extends ServiceProvider
{
    public function register(): void
    {}
    
    public function boot(): void
    {
        /**
         * config to publish
         * 
         */
        $this->publishes([
            __DIR__.'/../config/publisher.php' => config_path('publisher.php'),
        ], 'publisher-config');

        /**
         * config to join
         * 
         */
        $this->mergeConfigFrom(
            __DIR__.'/../config/publisher.php', 'publisher'
        );
    }
}
