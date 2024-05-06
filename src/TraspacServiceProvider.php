<?php

namespace Alfianizzah\Traspac;

use Alfianizzah\Traspac\Console\Commands\GenerateUserCommand;
use Illuminate\Support\ServiceProvider;

class TraspacServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateUserCommand::class
            ]);
        }
    }
}
