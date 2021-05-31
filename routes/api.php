<?php

use App\Http\Controllers\Juasoonline\JuasoonlineController;
use App\Http\Controllers\ProductService\Other\Category\CategoryController;
use App\Http\Controllers\ProductService\Other\Brand\BrandController;

use App\Http\Controllers\ProductService\Other\Country\CountryController;
use App\Http\Controllers\ProductService\Other\PromoType\PromoTypeController;
use App\Http\Controllers\ProductService\Store\StoreController;
use App\Http\Controllers\ProductService\Store\StoreAdministrator\StoreAdministratorController;
use App\Http\Controllers\ProductService\Store\Branch\BranchController;
use App\Http\Controllers\ProductService\Store\Charge\ChargeController;

use App\Http\Controllers\ProductService\Product\ProductController;
use App\Http\Controllers\ProductService\Product\Image\ImageController;
use App\Http\Controllers\ProductService\Product\Specification\SpecificationController;
use App\Http\Controllers\ProductService\Product\Overview\OverviewController;
use App\Http\Controllers\ProductService\Product\Review\ReviewController;
use App\Http\Controllers\ProductService\Product\Color\ColorController;
use App\Http\Controllers\ProductService\Product\Size\SizeController;
use App\Http\Controllers\ProductService\Product\Promotion\PromotionController;

use App\Http\Controllers\OrderService\Customer\CustomerController;
use App\Http\Controllers\OrderService\Customer\Address\AddressController;
use App\Http\Controllers\OrderService\Customer\Wishlist\WishlistController;
use App\Http\Controllers\OrderService\Customer\Cart\CartController;
use App\Http\Controllers\OrderService\Customer\Order\OrderController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'web'], function ()
{
    // Store administrator's routes
    Route::group([], function ()
    {
        // Unauthenticated (Unprotected) administrator routes
        Route::group([], function ()
        {
            Route::post( 'stores', [StoreController::class, 'store']);
            Route::post( 'store/{store}/administrator', [StoreAdministratorController::class, 'store']);
            Route::post( 'stores/auth/login', [StoreAdministratorController::class, 'login']);
        });

        // Authenticated (Protected) administrator routes
        Route::group(['middleware' => 'auth:store_administrator'], function()
        {
            Route::group([], function ()
            {
                Route::post( 'stores/auth/logout', [StoreAdministratorController::class, 'logout']);

                Route::apiResource( 'stores', StoreController::class) -> only(['show', 'update']);
                Route::apiResource( 'store.administrator', StoreAdministratorController::class ) -> only(['update', 'show']);
                Route::apiResource( 'store.branches', BranchController::class );
                Route::apiResource( 'store.charges', ChargeController::class ) -> only(['show']);
            });
            Route::group([], function ()
            {
                Route::apiResource( 'store.products', ProductController::class );
                Route::apiResource( 'product.images', ImageController::class );
                Route::apiResource( 'product.specifications', SpecificationController::class );
                Route::apiResource( 'product.overviews', OverviewController::class );
                Route::apiResource( 'product.reviews', ReviewController::class );
                Route::apiResource( 'product.colors', ColorController::class );
                Route::apiResource( 'product.sizes', SizeController::class );
            });
            Route::group([], function ()
            {
                Route::apiResource( 'categories', CategoryController::class ) -> only([ 'index', 'show' ]);
                Route::apiResource( 'brands', BrandController::class ) -> only([ 'index', 'show' ]);
            });
        });
    });

    // Store customer's routes
    Route::group([], function ()
    {
        // Unauthenticated (Unprotected) customer routes
        Route::group([], function()
        {
            Route::post( 'customers/registration', [ CustomerController::class, 'store' ]);
            Route::post( 'customers/auth/login', [ CustomerController::class, 'login' ]);
            Route::post( 'customers/account/verification', [ CustomerController::class, 'verification' ]);
        });

        // Authenticated (Protected) customer routes
        Route::group(['middleware' => 'auth:customer'], function()
        {
            Route::post( 'customers/auth/logout', [ CustomerController::class, 'logout' ]);
            Route::apiResource( 'customers', CustomerController::class ) -> only([ 'store', 'show', 'update' ]);
            Route::apiResource( 'customer.addresses', AddressController::class );
            Route::apiResource( 'customer.wishlists', WishlistController::class );
            Route::apiResource( 'customer.carts', CartController::class );
            Route::apiResource( 'customer.orders', OrderController::class );
        });
    });

    // System admins routes
    Route::group([], function ()
    {
        // Other product services resources routes
        Route::apiResource( 'countries', CountryController::class );
        Route::apiResource( 'promo-types', PromoTypeController::class );
        Route::apiResource( 'categories', CategoryController::class );
        Route::apiResource( 'brands', BrandController::class );

        // Product service [ store and related resource ] routes
        Route::apiResource( 'stores', StoreController::class);
        Route::apiResource( 'store.charges', ChargeController::class );

        // Product service [ product and related resource ] routes
        Route::apiResource( 'product.promotions', PromotionController::class );
    });

    // Juasoonline routes
    Route::group(['prefix' => 'juaso'], function ()
    {
        Route::get( 'products', [ JuasoonlineController::class, 'products' ]);
        Route::get( 'product/{product}', [ JuasoonlineController::class, 'product' ]);
    });
});
