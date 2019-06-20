<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\TodoInterface;
use App\Services\EloquentTodo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TodoInterface::class, EloquentTodo::class);
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
