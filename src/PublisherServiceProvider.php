<?php

namespace Publisher;

use Illuminate\Support\ServiceProvider;
use Publisher\Services\Handler\Publish;
use Publisher\Contracts\Services\Applicationable;

class PublisherServiceProvider extends ServiceProvider
{
    public array $singletons = [
        Applicationable::class => Publish::class
    ];

    public function register(): void
    {
        $this->app->singleton(Applicationable::class, function () {
            return new Publish();
        });
    }
    
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
