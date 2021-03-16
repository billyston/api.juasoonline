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
    Route::apiResource( 'stores', StoreController::class ) -> only( [ 'store', 'show', 'update'] );
    Route::apiResource( 'administrators', StoreAdministratorController::class ) -> only( [ 'store', 'show', 'update'] );
    Route::apiResource( 'branches', BranchController::class ) -> only( [ 'store', 'show', 'update'] );
});
