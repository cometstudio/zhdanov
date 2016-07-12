<?php

namespace App\Providers;

use App\Models\Webinar;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('imagesPath', '/'.config('resizer.dir', ''));

//        Webinar::creating(function($webinar)
//        {
//            $webinar->setStartTime();
//
//            return true;
//        });
//
//        Webinar::saving(function($webinar)
//        {
//            $webinar->setStartTime();
//
//            return true;
//        });
//
//        Webinar::updating(function($webinar)
//        {
//            $webinar->setStartTime();
//
//            return true;
//        });
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
