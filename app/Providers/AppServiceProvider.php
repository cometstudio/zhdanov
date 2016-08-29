<?php

namespace App\Providers;

use Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Guard $auth)
    {
        view()->composer('master', function($view) use ($auth){
            $view->with('currentUser', $auth->user());
        });

        view()->share('imagesPath', '/'.config('resizer.dir', ''));
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
