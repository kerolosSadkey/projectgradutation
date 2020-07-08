<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\ToDoInterface;
use App\Repository\ToDoRepository;
use Prophecy\Argument\Token\TokenInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(ToDoInterface::class,ToDoRepository::class);
    }
}
