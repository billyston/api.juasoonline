<?php

namespace App\Providers;

use App\Repositories\ProductService\Store\StoreRepository;
use App\Repositories\ProductService\Store\StoreRepositoryInterface;
use App\Repositories\ProductService\Store\StoreAdministratorRepository;
use App\Repositories\ProductService\Store\StoreAdministratorRepositoryInterface;
use App\Repositories\ProductService\Store\BranchRepository;
use App\Repositories\ProductService\Store\BranchRepositoryInterface;
use App\Repositories\ProductService\Product\ProductRepository;
use App\Repositories\ProductService\Product\ProductRepositoryInterface;
use App\Repositories\ProductService\Product\SpecificationRepository;
use App\Repositories\ProductService\Product\SpecificationRepositoryInterface;
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
        $this -> app -> bind( StoreRepositoryInterface::class, StoreRepository::class );
        $this -> app -> bind( StoreAdministratorRepositoryInterface::class, StoreAdministratorRepository::class );
        $this -> app -> bind( BranchRepositoryInterface::class, BranchRepository::class );

        $this -> app -> bind( ProductRepositoryInterface::class, ProductRepository::class );
        $this -> app -> bind( SpecificationRepositoryInterface::class, SpecificationRepository::class );
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
