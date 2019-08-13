<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\PersonController;
use App\UseCases\Contracts\PersonUseCaseInterface;
use App\UseCases\PersonUseCase;

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
        $this->app->bind(
            'App\UseCases\Contracts\PersonUseCaseInterface',
            'App\UseCases\PersonUseCase'
        );

        $this->app->bind(
            'App\Repositories\Contracts\PersonRepositoryInterface',
            'App\Repositories\PersonRepository'
        );

        $this->app->bind(
            'App\UseCases\Contracts\MovieUseCaseInterface',
            'App\UseCases\MovieUseCase'
        );

        $this->app->bind(
            'App\Repositories\Contracts\MovieRepositoryInterface',
            'App\Repositories\MovieRepository'
        );

        $this->app->bind(
            'App\UseCases\Contracts\ActorUseCaseInterface',
            'App\UseCases\ActorUseCase'
        );

        $this->app->bind(
            'App\Repositories\Contracts\ActorRepositoryInterface',
            'App\Repositories\ActorRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
