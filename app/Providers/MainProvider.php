<?php

namespace App\Providers;

use App\Contracts\MainInterface;
use App\Repositories\MainRepository;
use Illuminate\Support\ServiceProvider;

class MainProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(
          MainInterface::class,
          MainRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
