<?php

namespace App\Providers;

use App\Repositories\ProductService\Product\Category\CategoryRepositoryInterface;
use App\Repositories\ProductService\Product\Category\CategoryRepository;
use App\Repositories\ProductService\Store\StoreRepositoryInterface;
use App\Repositories\ProductService\Store\StoreRepository;
use App\Repositories\ProductService\Store\StoreAdministrator\StoreAdministratorRepositoryInterface;
use App\Repositories\ProductService\Store\StoreAdministrator\StoreAdministratorRepository;
use App\Repositories\ProductService\Store\Branch\BranchRepositoryInterface;
use App\Repositories\ProductService\Store\Branch\BranchRepository;
use App\Repositories\ProductService\Product\ProductRepositoryInterface;
use App\Repositories\ProductService\Product\ProductRepository;
use App\Repositories\ProductService\Product\Specification\SpecificationRepositoryInterface;
use App\Repositories\ProductService\Product\Specification\SpecificationRepository;
use App\Repositories\ProductService\Product\Overview\OverviewRepositoryInterface;
use App\Repositories\ProductService\Product\Overview\OverviewRepository;
use App\Repositories\ProductService\Product\Image\ImageRepositoryInterface;
use App\Repositories\ProductService\Product\Image\ImageRepository;


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
        $this -> app -> bind( CategoryRepositoryInterface::class, CategoryRepository::class );

        $this -> app -> bind( StoreRepositoryInterface::class, StoreRepository::class );
        $this -> app -> bind( StoreAdministratorRepositoryInterface::class, StoreAdministratorRepository::class );
        $this -> app -> bind( BranchRepositoryInterface::class, BranchRepository::class );

        $this -> app -> bind( ProductRepositoryInterface::class, ProductRepository::class );
        $this -> app -> bind( SpecificationRepositoryInterface::class, SpecificationRepository::class );
        $this -> app -> bind( OverviewRepositoryInterface::class, OverviewRepository::class );
        $this -> app -> bind( ImageRepositoryInterface::class, ImageRepository::class );
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
