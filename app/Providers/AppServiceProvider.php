<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider,
    Illuminate\Support\Facades\Schema;
use View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer(['adminlte.widgets.user-account', 'adminlte.widgets.user-panel'], function($view) {
            $view->with('auth', Auth::user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
