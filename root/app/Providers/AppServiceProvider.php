<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        // Illuminate\Pagination\Paginator
        // Bootstrap4を使用
        Paginator::useBootstrapFour();

        // Laravel8の場合
        // Paginator::useBootstrap();
    }
}
