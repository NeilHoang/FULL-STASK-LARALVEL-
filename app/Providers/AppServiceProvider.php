<?php

namespace App\Providers;

use App\Http\Repository\Eloquent\UserRepository;
use App\Http\Repository\UserRepositoryInterface;
use App\Http\Service\Implement\UserService;
use App\Http\Service\UsersServicesInterface;
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
        $this->app->singleton(UsersServicesInterface::class,UserService::class);
        $this->app->singleton(UserRepositoryInterface::class,UserRepository::class);
    }
}
