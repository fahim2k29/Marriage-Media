<?php

namespace App\Providers;

use App\AddPhoto;
use App\Models\Offer;
use App\Models\QuickPage;
use App\Models\SiteInfo;
use App\Models\Slider;
use App\User;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        view()->composer('*', function ($view) {
            if (!session()->has('info')) {
                session()->put('info', SiteInfo::find(1));
            }
            view()->share('info', session()->get('info'));

            if ($view->getName() == 'backend.partials._footer') {
                session()->forget('info');
            }
        }); 


        view()->composer('*', function () {
            // if (!session()->has('page')) {
            //     session()->put('page', QuickPage::get());
            // }
            view()->share('pages', QuickPage::all());
            // view()->share('offer', Offer::all());
            view()->share('slider', Slider::all());


        });


       
        
    }
}
