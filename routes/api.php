<?php

use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Controllers\Branch\BranchController;
use App\Http\Controllers\Shop\ShopController;
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

Route::group( [], function ()
{
    Route::apiResource( 'shops', ShopController::class );
    Route::apiResource( 'branches', BranchController::class );
    Route::apiResource( 'administrators', AdministratorController::class );
});
