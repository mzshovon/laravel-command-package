<?php

namespace EasyRepo\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;
use EasyRepo\Commands\GenerateRepo;
// Import other commands as needed

class EasyRepoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Add other commands here
        $this->commands([
            GenerateRepo::class
        ]);
    }
}
