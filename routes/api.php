<?php

use App\Http\Controllers\ProductService\Product\ImageController;
use App\Http\Controllers\ProductService\Product\OverviewController;
use App\Http\Controllers\ProductService\Product\SpecificationController;
use App\Http\Controllers\ProductService\Store\BranchController;
use App\Http\Controllers\ProductService\Store\StoreController;
use App\Http\Controllers\ProductService\Store\StoreAdministratorController;
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
    Route::group([ 'prefix' => 'stores' ], function ()
    {
        Route::post( '', [ StoreController::class, "store" ]);
        Route::post( 'administrator', [ StoreAdministratorController::class, "store" ]);
        Route::post( 'auth/login', [ StoreAdministratorController::class, "login" ]);
    });

    Route::group([ 'middleware' => 'auth:store_administrator' ], function()
    {

        Route::group([ 'prefix' => 'stores' ], function ()
        {
            Route::post( 'auth/logout', [ StoreAdministratorController::class, "logout" ]);

            Route::apiResource( '', StoreController::class, [ 'parameters' => [ '' => 'store' ]] ) -> only([ 'show', 'update' ]);
            Route::apiResource( 'administrator', StoreAdministratorController::class ) -> only([ 'show', 'update' ]);
            Route::apiResource( 'branches', BranchController::class );
        });

        Route::group([ 'prefix' => 'products' ], function ()
        {
            Route::apiResource( '', ProductController::class, [ 'parameters' => [ '' => 'product' ]] );
            Route::apiResource( 'specifications', SpecificationController::class );
            Route::apiResource( 'overviews', OverviewController::class );
            Route::apiResource( 'images', ImageController::class );
        });
    });
});
