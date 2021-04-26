<?php

namespace App\Providers;

use App\Models\OrderService\Customer\Customer;
use App\Observers\OrderService\Customer\CustomerObserver;
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
        Customer::observe( CustomerObserver::class );
    }
}
