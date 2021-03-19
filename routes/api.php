<?php

use App\Http\Controllers\ProductService\StoreController;
use App\Http\Controllers\ProductService\StoreAdministratorController;
use App\Http\Controllers\ProductService\BranchController;
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
    Route::group([ 'prefix' => 'auth' ], function()
    {
        Route::post( 'admin/login', [ StoreAdministratorController::class, "login" ] );
    });

    Route::post( 'stores', [ StoreController::class, "store" ] );
    Route::post( 'administrators', [ StoreAdministratorController::class, "store" ] );

    Route::group([ 'middleware' => 'auth:store_administrator' ], function()
    {
        Route::post( 'admin/logout', [ StoreAdministratorController::class, "logout" ] );

        Route::apiResource( 'stores', StoreController::class ) -> only( [ 'show', 'update'] );
        Route::apiResource( 'administrators', StoreAdministratorController::class ) -> only( [ 'show', 'update'] );
    });
});
