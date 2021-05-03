<?php

namespace App\Providers;

use App\Repositories\ProductService\Other\Category\CategoryRepositoryInterface;
use App\Repositories\ProductService\Other\Category\CategoryRepository;
use App\Repositories\ProductService\Other\Brand\BrandRepositoryInterface;
use App\Repositories\ProductService\Other\Brand\BrandRepository;

use App\Repositories\ProductService\Store\StoreRepositoryInterface;
use App\Repositories\ProductService\Store\StoreRepository;
use App\Repositories\ProductService\Store\StoreAdministrator\StoreAdministratorRepositoryInterface;
use App\Repositories\ProductService\Store\StoreAdministrator\StoreAdministratorRepository;
use App\Repositories\ProductService\Store\Branch\BranchRepositoryInterface;
use App\Repositories\ProductService\Store\Branch\BranchRepository;

use App\Repositories\ProductService\Product\ProductRepositoryInterface;
use App\Repositories\ProductService\Product\ProductRepository;
use App\Repositories\ProductService\Product\Image\ImageRepositoryInterface;
use App\Repositories\ProductService\Product\Image\ImageRepository;
use App\Repositories\ProductService\Product\Specification\SpecificationRepositoryInterface;
use App\Repositories\ProductService\Product\Specification\SpecificationRepository;
use App\Repositories\ProductService\Product\Overview\OverviewRepositoryInterface;
use App\Repositories\ProductService\Product\Overview\OverviewRepository;
use App\Repositories\ProductService\Product\Review\ReviewRepositoryInterface;
use App\Repositories\ProductService\Product\Review\ReviewRepository;
use App\Repositories\ProductService\Product\Color\ColorRepositoryInterface;
use App\Repositories\ProductService\Product\Color\ColorRepository;
use App\Repositories\ProductService\Product\Size\SizeRepositoryInterface;
use App\Repositories\ProductService\Product\Size\SizeRepository;

use App\Repositories\OrderService\Customer\CustomerRepositoryInterface;
use App\Repositories\OrderService\Customer\CustomerRepository;
use App\Repositories\OrderService\Customer\Address\AddressRepositoryInterface;
use App\Repositories\OrderService\Customer\Address\AddressRepository;
use App\Repositories\OrderService\Customer\Wishlist\WishlistRepositoryInterface;
use App\Repositories\OrderService\Customer\Wishlist\WishlistRepository;
use App\Repositories\OrderService\Customer\Cart\CartRepositoryInterface;
use App\Repositories\OrderService\Customer\Cart\CartRepository;
use App\Repositories\OrderService\Customer\Order\OrderRepositoryInterface;
use App\Repositories\OrderService\Customer\Order\OrderRepository;

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
        $this -> app -> bind( BrandRepositoryInterface::class, BrandRepository::class );

        $this -> app -> bind( StoreRepositoryInterface::class, StoreRepository::class );
        $this -> app -> bind( StoreAdministratorRepositoryInterface::class, StoreAdministratorRepository::class );
        $this -> app -> bind( BranchRepositoryInterface::class, BranchRepository::class );

        $this -> app -> bind( ProductRepositoryInterface::class, ProductRepository::class );
        $this -> app -> bind( SpecificationRepositoryInterface::class, SpecificationRepository::class );
        $this -> app -> bind( OverviewRepositoryInterface::class, OverviewRepository::class );
        $this -> app -> bind( ImageRepositoryInterface::class, ImageRepository::class );
        $this -> app -> bind( ReviewRepositoryInterface::class, ReviewRepository::class );
        $this -> app -> bind( ColorRepositoryInterface::class, ColorRepository::class );
        $this -> app -> bind( SizeRepositoryInterface::class, SizeRepository::class );

        $this -> app -> bind( CustomerRepositoryInterface::class, CustomerRepository::class );
        $this -> app -> bind( AddressRepositoryInterface::class, AddressRepository::class );
        $this -> app -> bind( WishlistRepositoryInterface::class, WishlistRepository::class );
        $this -> app -> bind( CartRepositoryInterface::class, CartRepository::class );
        $this -> app -> bind( OrderRepositoryInterface::class, OrderRepository::class );
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
