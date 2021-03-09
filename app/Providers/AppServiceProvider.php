<?php

namespace App\Providers;

use App\Observers\AddressObjectObserver;
use Illuminate\Support\ServiceProvider;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\AddressObject;

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
        AddressObject::observe(AddressObjectObserver::class);
    }
}
