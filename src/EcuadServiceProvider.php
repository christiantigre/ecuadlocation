<?php

namespace Ecuadlocation;

use Illuminate\Support\ServiceProvider;

class EcuadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        if($this->app->runningInConsole()){
            $this->commands([
                Commands\Pob_location::class,
            ]);
        }
        $this->publishes([__DIR__.'/migrations' => base_path('database/migrations')]);
        $this->publishes([__DIR__.'/Models' => base_path('app')]);       
        $this->publishes([__DIR__.'/Console/Commands' => base_path('app/Console/Commands')]);     
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
