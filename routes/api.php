<?php

use App\Http\Controllers\ProductService\Product\Category\CategoryController;
use App\Http\Controllers\ProductService\Product\Image\ImageController;
use App\Http\Controllers\ProductService\Product\Overview\OverviewController;
use App\Http\Controllers\ProductService\Product\Specification\SpecificationController;
use App\Http\Controllers\ProductService\Store\Branch\BranchController;
use App\Http\Controllers\ProductService\Store\StoreController;
use App\Http\Controllers\ProductService\Store\StoreAdministrator\StoreAdministratorController;
use App\Http\Controllers\ProductService\Product\ProductController;
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

Route::group([ 'prefix' => 'web' ], function ()
{
    // Unauthenticated (Unprotected) routes for store administrators
    Route::group([], function ()
    {
        Route::post( 'stores', [ StoreController::class, "store" ]);
        Route::post( 'stores/administrator', [ StoreAdministratorController::class, "store" ]);
        Route::post( 'stores/auth/login', [ StoreAdministratorController::class, "login" ]);
    });

    // Authenticated (Protected) routes for store administrators
    Route::group([ 'middleware' => 'auth:store_administrator' ], function()
    {

        Route::group([], function ()
        {
            Route::post( 'stores/auth/logout', [ StoreAdministratorController::class, "logout" ]);
            Route::get( 'store/administrator/{administrator}', [ StoreAdministratorController::class, "show" ]);

            Route::apiResource( 'store', StoreController::class, ['parameters' => [ '' => 'store' ]] ) -> only([ 'show', 'update']);
            Route::apiResource( 'store.administrator', StoreAdministratorController::class ) -> only(['update']);
            Route::apiResource( 'store.branches', BranchController::class );
        });

        Route::group([], function ()
        {
            Route::apiResource( 'store.products', ProductController::class, [ 'parameters' => [ '' => 'product' ]] );
            Route::apiResource( 'product.images', ImageController::class );
            Route::apiResource( 'product.specifications', SpecificationController::class );
            Route::apiResource( 'product.overviews', OverviewController::class );
        });

        Route::group([], function ()
        {
            Route::apiResource( 'categories', CategoryController::class ) -> only([ 'index', 'show' ]);
        });
    });

    // Unauthenticated (Unprotected) routes for customers
    Route::group([], function()
    {
    });

    // Authenticated (Protected) routes for customers
    Route::group([ 'middleware' => '' ], function()
    {
    });
});
