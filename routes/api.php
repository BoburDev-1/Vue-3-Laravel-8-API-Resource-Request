<?php

use App\Http\Controllers\Api\V1\AddProductController;
use App\Http\Controllers\Api\V1\CategoriesChildrenController;
use App\Http\Controllers\Api\V1\CategoriesController;
use App\Http\Controllers\APi\V1\FeedbackController;
use App\Http\Controllers\Api\V1\OrdersController;
use App\Http\Controllers\Api\V1\ProductChildrenController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\ProductShowController;
use App\Http\Controllers\Api\V1\SearchProductController;
use App\Http\Controllers\Api\V1\SearchProductsController;
use App\Http\Controllers\Api\V1\TtController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getallcategories', [CategoriesController::class, 'index']);
// Route::get('getallcategories', [TtController::class, 'index']);
Route::get('getallcategorieschildren', [CategoriesChildrenController::class, 'index']);

// show children
Route::get('getcategorieschildren/{id}', [CategoriesChildrenController::class, 'show']);

Route::get('getallproduct', [ProductController::class, 'index']);
Route::get('getproduct/{id}', [ProductShowController::class, 'show']);
// Route::get('getcategoryproduct/{id}', [ProductController::class, 'show']);
Route::get('getcategoryproduct/{id}/{sort}', [ProductController::class, 'show']);
Route::get('getcategorychildrenproduct/{catid}/{catchildrenid}/{sort}', [ProductChildrenController::class, 'show']);

// Route::get('search/{data}', [SearchProductsController::class, 'show']);
Route::get('search/{data}', [SearchProductController::class, 'search_product']);

Route::post('/feedback', [FeedbackController::class, 'store'] );
Route::post('/orders', [OrdersController::class, 'store'] );

Route::post('/addproduct', [AddProductController::class, 'add_product'])->name('addproduct');
Route::get('/delete_product/{id}', [AddProductController::class, 'delete_product'])->name('deleteproduct');
