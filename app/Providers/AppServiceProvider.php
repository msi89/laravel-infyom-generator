<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::prefix('api')
            ->middleware('api')
            ->as('api.')
            ->namespace($this->app->getNamespace().'Http\Controllers\API')
            ->group(base_path('routes/api.php')); 
    }
}