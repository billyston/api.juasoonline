<?php

namespace App\Providers;

use App\Repositories\ProductService\AdministratorRepository;
use App\Repositories\ProductService\AdministratorRepositoryInterface;
use App\Repositories\ProductService\BranchRepository;
use App\Repositories\ProductService\BranchRepositoryInterface;
use App\Repositories\ProductService\StoreRepository;
use App\Repositories\ProductService\StoreRepositoryInterface;
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
        $this -> app -> bind( BranchRepositoryInterface::class, BranchRepository::class );
        $this -> app -> bind( AdministratorRepositoryInterface::class, AdministratorRepository::class );
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
