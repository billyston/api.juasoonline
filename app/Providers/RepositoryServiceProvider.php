<?php

namespace App\Providers;

use App\Repositories\Shop\ShopRepository;
use App\Repositories\Shop\ShopRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this -> app -> bind( ShopRepositoryInterface::class, ShopRepository::class );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
