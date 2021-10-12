<?php

namespace Reatang\LaravelBundle;


use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Reatang\LaravelBundle\Services\SomeService;

class CommonServiceProvider
    extends ServiceProvider

    // set provider is defer
    implements DeferrableProvider
{
    public function register()
    {

        // singleton
        $this->app->singleton(SomeService::class, function () {
            return new SomeService();
        });

        // alias
        $this->app->alias(SomeService::class, 'reatang.bundle.service.some');
    }

    /**
     * tell container all service
     *
     * @return array|string[]
     */
    public function provides()
    {
        return [
            'reatang.bundle.service.some',
            SomeService::class
        ];
    }
}