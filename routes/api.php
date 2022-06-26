<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrdersController;
use App\Http\Controllers\API\ProductsController;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/Orders', [OrdersController::class, 'index']);
Route::get('v1/costumer/{id}', [CostumerController::class, 'show']);
Route::get('v1/products', [ProductsController::class, 'index']);


//crud products
Route::get('/products', [ProductsController:: class, 'index'])->name('products.index');
Route::post('/products', [ProductsController:: class, 'store'])->name('products.store');
Route::get('/products/{products}', [ProductsController:: class, 'show'])->name('products.show');
Route::put('/products/{products}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{products}',[ProductsController:: class, 'destroy'])->name('products.destroy');



// authentication
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login',[\App\Http\Controllers\AuthController::class,'login']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class,'logout']);
    Route::post('refresh', [\App\Http\Controllers\AuthController::class,'refresh']);
    Route::post('me', [\App\Http\Controllers\AuthController::class,'me']);

});

