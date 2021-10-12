<?php

namespace Reatang\LaravelBundle;

use Illuminate\Events\Dispatcher;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Reatang\LaravelBundle\Commands\SomeCommand;
use Reatang\LaravelBundle\Events\SomeEvent;
use Reatang\LaravelBundle\Listeners\SomeListener;
use function dirname;

class BundleServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @param Router $router
     * @param Dispatcher $event
     */
    public function boot(Router $router, Dispatcher $event)
    {
        // config
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/config.php', 'bundle_name');

        // lang
        $this->loadTranslationsFrom(dirname(__DIR__) . '/resources/lang', 'bundle_name');

        // view
        $this->loadViewsFrom(dirname(__DIR__) . '/resources/views', 'bundle_name');

        // routers
        $router->group([
            'prefix' => config('bundle_name.router_prefix'),
//            'namespace',
//            'where',
//            'as',
        ], include dirname(__DIR__) . '/src/routers.php');

        // middleware

        // event
        $event->listen(SomeEvent::class, SomeListener::class);
    }

    public function register()
    {
        if ($this->app->runningInConsole()) {

            // only console commands
            $this->commands([
                SomeCommand::class,
            ]);

            // databases
            $this->loadMigrationsFrom(dirname(__DIR__) . '/migrations');
            $this->publishes([
                dirname(__DIR__) . '/migrations' => database_path('migrations'),
            ], 'migrations');

            // config
            $this->publishes([
                dirname(__DIR__) . '/config/config.php' => config_path('bundle_name.php'),
            ], 'config');

            // view
            $this->publishes([
                dirname(__DIR__) . '/resources/views' => resource_path('views/vendor/bundle_name'),
            ], 'public');

            // assets
            $this->publishes([
                dirname(__DIR__) . '/resources/assets' => public_path('vendor/bundle_name'),
            ], 'public');

            // lang
            $this->publishes([
                dirname(__DIR__) . '/resources/lang' => resource_path('lang/vendor/bundle_name'),
            ], 'lang');
        }

    }
}
