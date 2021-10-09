<?php

namespace Reatang\LaravelBundle;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Reatang\LaravelBundle\Commands\SomeCommand;
use function dirname;

class BundleServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot(Router $router)
    {
        // config
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/config.php', 'bundle_name');

        // lang
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'bundle_name');

        // view
        $this->loadViewsFrom(dirname(__DIR__) . '/resources/views/', 'bundle_name');

        // routers
        $router_func = include dirname(__DIR__) . 'src/routers.php';
        $router->group([
            'prefix' => config('bundle_name.router_prefix'),
//            'namespace',
//            'where',
//            'as',
        ], $router_func);

        // middleware
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {

            // only console commands
            $this->commands([
                SomeCommand::class,
            ]);

            // databases
            $this->loadMigrationsFrom(dirname(__DIR__) . '/migrations/');
            $this->publishes([
                dirname(__DIR__) . '/migrations/' => database_path('migrations'),
            ], 'migrations');

            // config
            $this->publishes([
                dirname(__DIR__) . '/config/config.php' => config_path('bundle_name.php'),
            ], 'config');

            // assets
            $this->publishes([
                dirname(__DIR__) . '/resources/assets' => public_path('vendor/bundle_name'),
            ], 'public');

            // lang
            $this->publishes([
                dirname(__DIR__) . '/resources/lang' => resource_path('lang/vendor/bundle_name'),
            ], 'lang');
        }

//        $this->app->singleton(SomeService::class, function(){
//            return new SomeService();
//        });
    }
}
