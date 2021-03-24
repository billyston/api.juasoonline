<?php

use App\Http\Controllers\ProductService\StoreController;
use App\Http\Controllers\ProductService\StoreAdministratorController;
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
    Route::group([ 'prefix' => 'stores' ], function()
    {
        Route::post( '', [ StoreController::class, "store" ]);
        Route::post( 'administrator', [ StoreAdministratorController::class, "store" ]);

        Route::post( 'auth/login', [ StoreAdministratorController::class, "login" ]);

        Route::group([ 'middleware' => 'auth:store_administrator' ], function()
        {
            Route::post( 'auth/logout', [ StoreAdministratorController::class, "logout" ]);
            Route::apiResource( '', StoreController::class, [ 'parameters' => [ '' => 'store' ]] ) -> only([ 'show', 'update' ]);
            Route::apiResource( 'administrator', StoreAdministratorController::class ) -> only([ 'show', 'update' ]);
        });
    });
});
