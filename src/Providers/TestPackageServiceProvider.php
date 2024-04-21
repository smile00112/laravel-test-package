<?php
namespace Smile00112\TestPackage\Providers;

use Illuminate\Support\ServiceProvider;
use Smile00112\TestPackage\Console\Commands\TestCommand;

class TestPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/test_package.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'testPackage');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
//            __DIR__.'/../database/migrations/' => database_path('migrations'),
//            __DIR__.'/../lang' => $this->app->langPath('vendor/courier'),
            __DIR__.'/../resources/views' => resource_path('views/vendor/test-package'),
            __DIR__.'/../config/test-package.php' => config_path('test-package.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                TestCommand::class,
            ]);
        }
    }
}
