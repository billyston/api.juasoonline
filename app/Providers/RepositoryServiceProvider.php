<?php

namespace App\Providers;

use App\Repositories\ProductService\StoreAdministratorRepository;
use App\Repositories\ProductService\StoreAdministratorRepositoryInterface;
use App\Repositories\ProductService\BranchRepository;
use App\Repositories\ProductService\BranchRepositoryInterface;
use App\Repositories\ProductService\StoreRepository;
use App\Repositories\ProductService\StoreRepositoryInterface;
use App\Repositories\StoreAdmin\StoreAdminRepository;
use App\Repositories\StoreAdmin\StoreAdminRepositoryInterface;
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
