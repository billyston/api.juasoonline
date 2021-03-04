<?php

use App\Http\Controllers\ProductService\StoreController;
use App\Http\Controllers\ProductService\StoreAdministratorController;
use App\Http\Controllers\ProductService\BranchController;
use App\Http\Controllers\Web\Admins\AdminController;
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

Route::group([], function ()
{
    Route::apiResource( 'stores', StoreController::class );
//    Route::apiResource( 'administrators', StoreAdministratorController::class );
//    Route::apiResource( 'branches', BranchController::class );
});


Route::group([ 'prefix' => 'web' ], function ()
{
    Route::post( 'registration', [ AdminController::class, 'registration' ]);
});
